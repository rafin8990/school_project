<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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



        $user = Admin::where('email', $request->input('email'))->first();
        // dd($user);

        
        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);

                return redirect('/dashboard')->with('success', 'Login successful!');
            } 
            else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        } 
        else {

            return back()->with('fail', 'Login failed. Please check your user.');
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
    }


    
}
