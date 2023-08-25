<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends BaseController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'))->display(function () {
            return "<a href='/blogs/$this->alias' target='_blank'>$this->title</a>";
        });
        $grid->column('short_desc', __('Short description'))->display(function() {
            return trimString($this->short_desc, '...',50);
        });
        $grid->column('thumbnail', __('Thumbnail'));
        $grid->column('author_id', __('Author'))->display(function() {
            return $this->author->name;
        });
        $grid->column('categories', __('Categories'))->display(function() {
            return implode(' ', array_map(function($item) {
                return "<div class='label label-default'>$item->name</div>";
            }, json_decode($this->categories)));
        });
        $this->timestampGrid($grid);

        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('short_desc', __('Short description'));
        $show->field('alias', __('Alias'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('content', __('Content'));
        $show->field('author_id', __('Author id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->hidden('author_id')->default(Admin::user()->id);
        $form->text('title', __('Title'))->rules('required|min:3');
        $form->textarea('short_desc', __('Short description'))->rules('required|min:3|max:255');
        $form->image('thumbnail', __('Thumbnail'))->thumbnail('small', 150, 150);
        $form->ckeditor('content', __('Content'))->rules('required|min:3');
        $form->multipleSelect('categories','Categories')->options(Category::all()->pluck('name','id'));

        return $form;
    }
}
