<?php

namespace App\Providers;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $data = null; // Set a default value for $data
            if (Session::has('loginId')) {
                $userId = Session::get('loginId');
                $data = Admin::find($userId); // Retrieve user data by the loginId from the session
            }
            $view->with('data', $data);
        });
    }
}
