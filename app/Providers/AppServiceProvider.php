<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

     // note: the package SchoolBoardAdmin/Tuitionfees is made available in views, 
     // will be used exclusively in the view \views\home.blade.php and \views\app.blade.php 

        $this->publishes([  __DIR__.'/views' => base_path('resources/views/'), ]);    
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
