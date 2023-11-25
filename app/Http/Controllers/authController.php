<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class authController extends Controller
{
    public function login()
    {
        return view("auth/login");
    }
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

        return redirect()->route('/login')->with('success', 'Registration successful! Please log in.');
    }
}
