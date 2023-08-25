<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\HighlightCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HighlightCategoryController extends BaseController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HighlightCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HighlightCategory());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category'))->display(function() {
            $category = Category::where('id', $this->category_id)->first();
            return $category->name;
        });
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
        $show = new Show(HighlightCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new HighlightCategory());

//        $form->number('category_id', __('Category id'));
        $form->select('category_id', __('Category'))->options(Category::all()->pluck('name', 'id'));

        return $form;
    }
}
