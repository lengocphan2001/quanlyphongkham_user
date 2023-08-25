<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SiteConfig;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $courses = Course::select('id', 'name', 'alias')->get();
        $globalConfig = SiteConfig::all()->pluck('value', 'name');
        View::share('courseMenu', $courses);
        View::share('globalConfig', $globalConfig);
    }
}
