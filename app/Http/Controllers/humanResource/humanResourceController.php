<?php

namespace App\Http\Controllers\humanResource;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class humanResourceController extends Controller
{
    // Teacher  add
    public function teachers(){
        return view('/Dashboard/humanResource/teachers');
    }

    public function addteacher(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birth_date' => 'required|string',
            'teacher_id' => 'required|string',
            'designation' => 'required|string',
            'section' => 'required|string',
            'joindate' => 'required|string',
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'present_address' => 'required|string',
            'present_city' => 'required|string',
            'present_state' => 'required|string',
            'present_country' => 'required|string',
            'present_zip_code' => 'required|string',
            'parmanent_address' => 'required|string',
            'parmanent_state' => 'required|string',
            'parmanent_city' => 'required|string',
            'parmanent_country' => 'required|string',
            'parmanent_zip_code' => 'required|string',
            'email' => 'required|string',
            'mobile' => 'required|string',
            'password' => 'required|string|min:4',
            'nid' => 'required|string',
        ]);


        $image = $request->file('image')->getClientOriginalName();

        $path = 'assets/images';
        $imagePath = $request->file('image')->move($path, $image);
        $isExist = Teacher::where('email', $request->input('email'))
            ->orWhere('mobile', $request->input('mobile'))
            ->exists();

        if ($isExist) {
            return back()->with('fail', 'Failed. This Student already exists');
        }

        $student = new Teacher();
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->birth_date = $request->input('birth_date');
        $student->teacher_id = $request->input('teacher_id');
        $student->designation = $request->input('designation');
        $student->section = $request->input('section');
        $student->joindate = $request->input('joindate');
        $student->gender = $request->input('gender');
        $student->image = $image;
        $student->present_address = $request->input('present_address');
        $student->present_city = $request->input('present_city');
        $student->present_state = $request->input('present_state');
        $student->present_country = $request->input('present_country');
        $student->present_zip_code = $request->input('present_zip_code');
        $student->parmanent_address = $request->input('parmanent_address');
        $student->parmanent_state = $request->input('parmanent_state');
        $student->parmanent_city = $request->input('parmanent_city');
        $student->parmanent_country = $request->input('parmanent_country');
        $student->parmanent_zip_code = $request->input('parmanent_zip_code');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->mobile = $request->input('mobile');
        $student->nid = $request->input('nid');
        $student->role = 'teacher';
        $student->save();


        return redirect('/addteacher')->with('success', 'Sucessfully created.');
    }

    public function addTeachers(){
        return view('/Dashboard/humanResource/addteacher');
    }
    public function staff(){
        return view('/Dashboard/humanResource/staff');
    }
    public function staffList(){
        return view('/Dashboard/humanResource/staffList');
    }
    
    public function designation(){
        return view('/Dashboard/humanResource/designation');
    }
    public function department(){
        return view('/Dashboard/humanResource/department');
    }
}
