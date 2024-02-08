<?php

namespace App\Http\Controllers\NEDUBD;

use App\Http\Controllers\Controller;
use App\Models\School_Admin;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Staff;
use App\Models\Head_teacher;


class AdminController extends Controller
{

    public function allAdmin(){
        $admins=Admin::all();
        return view("Dashboard.NEDUBD.alladmin",compact("admins"));
    }
    public function viewAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $admin], );
    }
    public function viewSchoolAdmin($id)
    {
        $admin = School_Admin::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $admin], );
    }
    public function viewStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $student], );
    }
    public function viewTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $teacher], );
    }
    public function viewStaff($id)
    {
        $staff = Staff::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $staff], );
    }
    public function viewPrinciple($id)
    {
        $principle = Head_teacher::findOrFail($id);
        return view('Dashboard/profileView', ['admin' => $principle], );
    }






    public function updateAdmin(Request $request, $adminId, )
    {
        $admin = Admin::findOrFail($adminId);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone_number = $request->input('phone_number');
        $admin->role = $request->input('role');
        $admin->school_code = $request->input('school_code');
        $admin->save();
        return redirect('/allAdmin')->with('success', 'Admin updated successfully');
    }



}

