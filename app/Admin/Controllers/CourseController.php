<?php

namespace App\Admin\Controllers;

use App\Models\Course;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CourseController extends BaseController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('normal_price', __('Normal price'));
        $grid->column('thumbnail', __('Thumbnail'));
//        $grid->column('content', __('Content'));
        $this->timestampGrid($grid);

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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('short_desc', __('Short description'));
        $show->field('alias', __('Alias'));
        $show->field('price', __('Price'));
        $show->field('normal_price', __('Normal price'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('content', __('Content'));
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
        $form = new Form(new Course());

        $form->text('name', __('Name'))->rules('required');
        $form->textarea('short_desc', __('Short description'))->rules('required');
        $form->text('alias', __('Alias'))->default(0)->rules('required|max:255');
        $form->text('price', __('Price'))->default(0)->rules('required');
        $form->text('normal_price', __('Normal price (Non-discounted)'))->default(0)->rules('');
        $form->image('thumbnail', __('Thumbnail'))->thumbnail('small', 150, 150)->rules('required');
        $form->textarea('content', __('Content'))->rules('required|min:3');

        return $form;
    }
}
