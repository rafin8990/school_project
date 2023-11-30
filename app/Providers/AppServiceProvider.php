<?php

namespace App\Providers;
use App\Models\Admin;
use App\Models\Student;
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
            $adminData = null; 
            $studentData=null;
            $adminId = Session::get('loginId');
            $studentID=Session::get('studentId');
            if($adminId){
                $adminData=Admin::find($adminId);
            }
            if($studentID){
                $studentData=Student::find($studentID);
            }
            $view->with('adminData', $adminData)
                ->with('studentData',$studentData);
            
        });
    }
}
