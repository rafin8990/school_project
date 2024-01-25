<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\School_Admin;
use App\Models\Student;
use App\Models\Teacher;
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
            $staffData=null;
            $adminData = null;
            $schoolAdminData = null;
            $studentData = null;
            $teacherData = null;
            $principalData=null;
            $schoolCode = "100";
            $school_adminId = Session::get('loginId');
            $adminId=Session::get('adminId');
            $studentID = Session::get('studentId');
            $teacherId = Session::get('teacherId');
            $principalId=Session::get('principalId');
            $staffId=Session::get('staffId');
            if ($school_adminId) {
                $schoolAdminData = School_Admin::find($school_adminId);
            }
            if ($adminId) {
                $adminData = Admin::find($adminId);
            }
            if ($studentID) {
                $studentData = Student::find($studentID);
            }
            if ($teacherData) {
                $teacherData = Teacher::find($teacherId);
            }
            if ($principalId) {
                $principalData = Teacher::find($principalId);
            }
            if ($staffData) {
                $staffData = Teacher::find($staffId);
            }
            $view->with('schoolAdminData', $schoolAdminData)
                ->with('adminData', $adminData)
                ->with('studentData', $studentData)
                ->with('schoolCode', $schoolCode)
                ->with('teacherData', $teacherData)
                ->with('principalData', $principalData)
                ->with('staffData', $staffData);
               
        });
    }
}
