<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
    
        $admin = Admin::where('email', $request->input('email'))->first();
        $student = Student::where('email', $request->input('email'))->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('loginId', $admin->id);

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
        }



    }


    // registration 

    public function register()
    {
        return view("auth/register");
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:admins',
            'phone_number' => 'required|string|unique:admins',
            'password' => 'required|string',
        ]);


        $existingUser = Admin::where('email', $request->input('email'))->first();
        $existingPhoneNumber = Admin::where('phone_number', $request->input('phone_number'))->first();


        if ($existingUser) {
            // Email is not unique, handle the error here
            return back()->withInput()->withErrors(['email' => 'This email is already taken.']);
        }
        if ($existingPhoneNumber) {
            // phone number is not unique, handle the error here
            return back()->withInput()->withErrors(['phone_number' => 'This phone number is already taken.']);
        }

        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone_number = $request->input('phone_number');
        $admin->password = Hash::make($request->input('password'));
        $admin->role = 'admin';
        $admin->save();


        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login');
        }
        if(Session::has('studentId')){
            Session::pull('studentId');
            return redirect('/login');
        }
    }



}
