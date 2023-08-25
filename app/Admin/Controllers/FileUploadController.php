<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {
        $file     = $request->file('upload');
        $today = date('ymd');
        $path = Storage::disk('post_contents')->put($today, $file);
        $param = [
            'uploaded' => 1,
            'fileName' => basename($path),
            'url'      => Storage::disk('post_contents')->url($path)
        ];
        return response()->json($param);
    }
}
