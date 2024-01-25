<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Head_teacher;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\School_Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class authController extends Controller
{
    public function login()
    {
        return view("auth/login");
    }


    public function loginUser(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:4',
        ]);
        $staff=Staff::where('email', $request->input('email'))->first();
        $principal=Head_teacher::where('email', $request->input('email'))->first();
        $admin=Admin::where('email', $request->input('email'))->first();
        $school_admin = School_Admin::where('email', $request->input('email'))->first();
        $student = Student::where('email', $request->input('email'))->first();
        $teacher = Teacher::where('email', $request->input('email'))->first();
        if ($school_admin) {
            if (Hash::check($request->password, $school_admin->password)) {
                $request->session()->put('loginId', $school_admin->id);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        } else if ($student) {
            if (Hash::check($request->password, $student->password)) {
                $request->session()->put('studentId', $student->id);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        } else if ($teacher) {
            if (Hash::check($request->password, $teacher->password)) {
                $request->session()->put('teacherId', $teacher->id);
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        } else if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('adminId', $admin->id);
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        }
        else if ($principal) {
            if (Hash::check($request->password, $principal->password)) {
                $request->session()->put('principalId', $principal->id);
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        }
        else if ($staff) {
            if (Hash::check($request->password, $staff->password)) {
                $request->session()->put('staffId', $staff->id);
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        }



    }


    // registration 

    public function register()
    {
        return view("auth/register");
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role'=>'required|string',
            'password' => 'required|string|min:4',
            'school_code'=>'required|string'
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $path = 'assets/images';
        $imagePath = $request->file('image')->move($path, $image);

        $isExist = School_Admin::where('email', $request->input('email'))
            ->orWhere('phone_number', $request->input('phone_number'))
            ->exists();
        if ($isExist) {
            return back()->withInput()->withErrors(['email or Phone' => 'This email or phone number is already taken.']);
        }


        $admin = new School_Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone_number = $request->input('phone_number');
        $admin->school_code = $request->input('school_code');
        $admin->image = $image;
        $admin->password = Hash::make($request->input('password'));
        $admin->role = $request->input('role');
        $admin->save();


        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function logout()
    {
        if (Session::has('adminId')) {
            Session::pull('adminId');
            return redirect('/login');
        }
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login');
        }
        if (Session::has('studentId')) {
            Session::pull('studentId');
            return redirect('/login');
        }
        if (Session::has('teacherId')) {
            Session::pull('teacherId');
            return redirect('/login');
        }
        if (Session::has('staffId')) {
            Session::pull('staffId');
            return redirect('/login');
        }
    }



}
