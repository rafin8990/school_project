<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Staff;
use App\Models\School_Admin;
use App\Models\Student;
use App\Models\Teacher;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('adminId')) {
            $userId = Session::get('adminId');
            $user = Admin::find($userId);
            if ($user ) {
                return $next($request); 
            }
        }else if(Session::has('loginId')){
            $userId = Session::get('loginId');
            $user = School_Admin::find($userId);
            if ($user) {
                return $next($request); 
            }
        }else if(Session::has('studentId')){
            $userId = Session::get('studentId');
            $user = Student::find($userId);
            if ($user) {
                return $next($request); 
            }
        }else if(Session::has('teacherId')){
            $userId = Session::get('teacherId');
            $user = Teacher::find($userId);
            if ($user) {
                return $next($request); 
            }
        }
        
        else if(Session::has('staffId')){
            $userId = Session::get('staffId');
            $user = Staff::find($userId);
            if ($user) {
                return $next($request); 
            }
        }
        else if(Session::has('principalId')){
            $userId = Session::get('principalId');
            $user = Teacher::find($userId);
            if ($user) {
                return $next($request); 
            }
        }
        return redirect('/')->with('fail', 'You do not have access this route privileges.');
    }
}
