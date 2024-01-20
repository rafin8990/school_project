<?php

namespace App\Http\Controllers\NEDUBD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function allAdmin($schoolCode)
    {
        $similarAdmins = Admin::where('school_code', 'like', '%' . $schoolCode . '%')->get();
        return view('/Dashboard/NEDUBD/alladmin', ['admins' => $similarAdmins]);
    }


    public function updateAdmin(Request $request, $school_code, $adminId, )
    {
        $admin = Admin::findOrFail($adminId);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone_number = $request->input('phone_number');
        $admin->role = $request->input('role');
        $admin->school_code = $request->input('school_code');
        $admin->save();
        return redirect('/allAdmin/' . $school_code)->with('success', 'Admin updated successfully');
    }

    public function viewAdmin($school_code, $id)
    {
        $admin = Admin::findOrFail($id);
        return view('Dashboard/NEDUBD/editAdmin', ['admin' => $admin], );
        
    }

}

