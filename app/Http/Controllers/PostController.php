<?php

namespace App\Http\Controllers;

use App\Models\HighlightCategory;
use App\Models\Post;
use App\Models\PostBookmark;
use App\Models\PostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function toggleLikePost(Request $request)
    {
        if ($request->ajax()) {
            $post_id = $request->post_id;
            $user = auth()->user();
            $post = Post::where('id', $post_id)->first();
            if (empty($post)) {
                return failureResponse(404, 'Post not found');
            }
            if ($postLike = PostLike::where('user_id', $user->id)->where('post_id', $post_id)->exists()) {
                $postLike->delete();
                return successResponse(true, 'Post unliked');
            } else {
                PostLike::insert(array('user_id' => $user->id, 'post_id' => $post_id));
                return successResponse(true, 'Post liked');
            }
        }
        return failureResponse(400, 'Bad request');
    }

    public function toggleBookmarkPost(Request $request)
    {
        if ($request->ajax()) {
            $post_id = $request->post_id;
            $user = auth()->user();
            $post = Post::where('id', $post_id)->first();
            if (empty($post)) {
                return failureResponse(404, 'Post not found');
            }
            if ($postBookmark = PostBookmark::where('user_id', $user->id)->where('post_id', $post_id)->exists()) {
                $postBookmark->delete();
                return successResponse(true, 'Bookmark removed');
            } else {
                PostBookmark::insert(array('user_id' => $user->id, 'post_id' => $post_id));
                return successResponse(true, 'Bookmark added');
            }
        }
        return failureResponse(400, 'Bad request');
    }

    public function getPosts(Request $request)
    {
        $req = $request->only(['filter', 'search']);
        $query = array();

        if (!empty($req['search'])) {
            $search = $req['search'];
            $query[] = array('title', 'like', "%$search%");
        }
        $posts = Post::with('author')->where($query)->simplePaginate(10)->withQueryString();
        $current_user = auth()->user();
        foreach ($posts as $post) {
            if ($current_user) {
                $user_id = $current_user->id;
                $post->liked = PostLike::where('user_id', $user_id)->where('post_id', $post->id)->exists();
                $post->bookmarked = PostBookmark::where('user_id', $user_id)->where('post_id', $post->id)->exists();
            }
            $post->like_count = PostLike::where('post_id', $post->id)->count();
            $post->bookmark_count = PostBookmark::where('post_id', $post->id)->count();
        }
        $latestPosts = Post::with('author')->orderBy('created_at', 'desc')->take(5)->get();
        $highlightCategories = HighlightCategory::with('category')->get();

        return view('mindmatrix.blogs.index', array('posts' => $posts, 'latestPosts' => $latestPosts, 'highlightCategories' => $highlightCategories));
    }

    public function getPost(Request $request)
    {
        $alias = $request->alias;
        $post = Post::with('author')->where('alias', $alias)->first();
        $latestPosts = Post::with('author')->orderBy('created_at', 'desc')->take(5)->get();
        $highlightCategories = HighlightCategory::with('category')->get();
        if (!$post) {
            abort(404);
        }
        return view('mindmatrix.blogs.post', array('post' => $post, 'latestPosts' => $latestPosts, 'highlightCategories' => $highlightCategories));
    }
}
