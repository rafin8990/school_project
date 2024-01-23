<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Head_teacher;
use Illuminate\Http\Request;

class AuthoriserController extends Controller
{
    public function authoriser()
    {
        $principals = Head_teacher::all();
        return view("/Dashboard/administration/headTeacher", ['principals' => $principals]);
    }
    public function addHeadTeacher()
    {
        return view("/Dashboard/administration/addHeadTeaher");
    }

    public function storeHeadTeacher(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'designation' => 'required|string',
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'nid' => 'required|string',
            'details' => 'required|string',
            'school_code' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string|min:4',
        ]);
        // dd($request);
        $image = $request->file('image')->getClientOriginalName();

        $path = 'assets/images';
        $imagePath = $request->file('image')->move($path, $image);
        $isExist = Head_teacher::where('email', $request->input('email'))
            ->orWhere('phone_number', $request->input('phone_number'))
            ->exists();

        if ($isExist) {
            return back()->with('fail', 'Failed. This Head teacher already exists');
        }

        $principal = new Head_teacher();
        $principal->name = $request->input('name');
        $principal->designation = $request->input('designation');
        $principal->image = $image;
        $principal->email = $request->input('email');
        $principal->phone_number = $request->input('phone_number');
        $principal->password = $request->input('password');
        $principal->address = $request->input('address');
        $principal->nid = $request->input('nid');
        $principal->details = $request->input('details');
        $principal->gender = $request->input('gender');
        $principal->school_code = $request->input('school_code');
        $principal->role = $request->input('role');
        $principal->save();

        return redirect('/addHeadTeacher')->with('success', 'Sucessfully created.');


    }

    public function updateHeadteacher($id)
    {
        $headTeacher = Head_teacher::findOrFail($id);
        return view("/Dashboard/administration/updateHeadTeacher", ['headTeacher' => $headTeacher]);
    }

    public function updatePrincipal(Request $request,$id)
    {
        $head_teacher=Head_teacher::findOrFail($id);
        $head_teacher->name=$request->input('name');
        $head_teacher->gender=$request->input('gender');
        $head_teacher->designation=$request->input('designation');
        $head_teacher->email=$request->input('email');
        $head_teacher->phone_number=$request->input('phone_number');
        $head_teacher->address=$request->input('address');
        $head_teacher->nid=$request->input('nid');
        $head_teacher->details=$request->input('details');
        $head_teacher->details=$request->input('details');
        $head_teacher->save();
        return redirect('/authoriser')->with('success', 'Head Teacher updated successfully');
    }
}
