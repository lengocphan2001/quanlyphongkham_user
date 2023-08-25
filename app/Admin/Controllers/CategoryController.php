<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends BaseController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent'))->display(function() {
            if ($this->parent_id != null) {
                $parent = Category::where('id', $this->parent_id)->first();
                return $parent->name;
            } else {
                return __('Top');
            }
        });
        $grid->column('slug', __('Slug'));
        $grid->column('name', __('Name'));
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent'));
        $show->field('slug', __('Slug'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Category());

        $form->select('parent_id', __('Parent category'))->options(Category::all()->pluck('name', 'id'));
//        $form->text('slug', __('Slug'));
        $form->text('name', __('Name'))->rules('required|min:3|unique:categories');
        return $form;
    }
}
