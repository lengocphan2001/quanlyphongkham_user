<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /**
         * The following block code is useful when deploying the App to my shared hosting.
         * https://stackoverflow.com/a/47518119/4926588
         *
         * $this->app->bind('path.public', function() {
         *   return base_path().'/../../laravel/dashcore/';
         *});
         **/
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
