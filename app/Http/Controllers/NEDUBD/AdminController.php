<?php

namespace App\Http\Controllers\NEDUBD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function allAdmin()
    {
        // $similarAdmins = Admin::where('school_code', 'like', '%' . $schoolCode . '%')->get();
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/alladmin', ['admins' => $admins]);
    }


    public function admin_one(){
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/admin_one', ['admins' => $admins]);
}
    public function admin_two(){
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/admin_two', ['admins' => $admins]);
}
    public function dataEntryOperator(){
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/data_entry_operator', ['admins' => $admins]);
}
    public function executive(){
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/executive', ['admins' => $admins]);
}
    public function customerCare(){
        $admins=Admin::all();
        return view('/Dashboard/NEDUBD/customer_care', ['admins' => $admins]);
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

    public function viewAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        return view('Dashboard/NEDUBD/editAdmin', ['admin' => $admin], );
        
    }

}

