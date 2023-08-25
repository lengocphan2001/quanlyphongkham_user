<?php

namespace App\Admin\Controllers;

use App\Models\Course;
use Encore\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\View;

class BaseController extends AdminController
{

    public function timestampGrid(\Encore\Admin\Grid $grid) {
        $grid->column('created_at', __('Created time'))->display(function() {
            return $this->created_at->format('d/m/Y H:i:s');
        });
        $grid->column('updated_at', __('Last modified'))->display(function() {
            return $this->updated_at->format('d/m/Y H:i:s');
        });
    }
}
