<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('posts', PostController::class);
    $router->resource('highlight-categories', HighlightCategoryController::class);
    $router->resource('reviews', ReviewController::class);
    $router->resource('courses', CourseController::class);
    $router->resource('site-configs', SiteConfigController::class);
    $router->post('/file-upload', 'FileUploadController@index');


});
