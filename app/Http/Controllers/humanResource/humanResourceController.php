<?php

namespace App\Http\Controllers\humanResource;

use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class humanResourceController extends Controller
{
    // Teacher  add
    public function teachers(Request $request, $schoolCode)
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $teachers = Teacher::where('school_code', $schoolCode)
                ->where(function ($query) use ($search) {
                    $query->where('firstname', 'LIKE', '%' . $search . '%')
                        ->orWhere('lastname', 'LIKE', '%' . $search . '%')
                        ->orWhere('teacher_id', 'LIKE', '%' . $search . '%')
                        ->orWhere('designation', 'LIKE', '%' . $search . '%');
                })->get(); // Move get() outside of the where method
        } else {
            $teachers = Teacher::where('school_code', $schoolCode)->get();
        }
    
        return view('/Dashboard/humanResource/teachers', ['teachers' => $teachers]);
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
            return back()->with('fail', 'Failed. This teacher already exists');
        }

        $teacher = new Teacher();
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->birth_date = $request->input('birth_date');
        $teacher->teacher_id = $request->input('teacher_id');
        $teacher->designation = $request->input('designation');
        $teacher->section = $request->input('section');
        $teacher->joindate = $request->input('joindate');
        $teacher->gender = $request->input('gender');
        $teacher->image = $image;
        $teacher->present_address = $request->input('present_address');
        $teacher->present_city = $request->input('present_city');
        $teacher->present_state = $request->input('present_state');
        $teacher->present_country = $request->input('present_country');
        $teacher->present_zip_code = $request->input('present_zip_code');
        $teacher->parmanent_address = $request->input('parmanent_address');
        $teacher->parmanent_state = $request->input('parmanent_state');
        $teacher->parmanent_city = $request->input('parmanent_city');
        $teacher->parmanent_country = $request->input('parmanent_country');
        $teacher->parmanent_zip_code = $request->input('parmanent_zip_code');
        $teacher->email = $request->input('email');
        $teacher->password = Hash::make($request->input('password'));
        $teacher->mobile = $request->input('mobile');
        $teacher->nid = $request->input('nid');
        $teacher->school_code=$request->input('school_code');
        $teacher->role = 'teacher';
        $teacher->save();

        return redirect('/addteacher')->with('success', 'Sucessfully created.');
    }

    public function addTeachers(){
        return view('/Dashboard/humanResource/addteacher');
    }

    public function edit($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('Dashboard/humanreSource/updateTeacher', ['teachers' => $teachers]);
    }
    
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->birth_date = $request->input('birth_date');
        $teacher->teacher_id = $request->input('teacher_id');
        $teacher->designation = $request->input('designation');
        $teacher->section = $request->input('section');
        $teacher->joindate = $request->input('joindate');
        $teacher->gender = $request->input('gender');
        $teacher->present_address = $request->input('present_address');
        $teacher->present_city = $request->input('present_city');
        $teacher->present_state = $request->input('present_state');
        $teacher->present_country = $request->input('present_country');
        $teacher->present_zip_code = $request->input('present_zip_code');
        $teacher->parmanent_address = $request->input('parmanent_address');
        $teacher->parmanent_state = $request->input('parmanent_state');
        $teacher->parmanent_city = $request->input('parmanent_city');
        $teacher->parmanent_country = $request->input('parmanent_country');
        $teacher->parmanent_zip_code = $request->input('parmanent_zip_code');
        $teacher->email = $request->input('email');
        $teacher->mobile = $request->input('mobile');
        $teacher->nid = $request->input('nid');
        $teacher->role = 'teacher';
        $teacher->save();
    
        return redirect('/teachers')->with('success', 'Teacher updated successfully');
    }

    public function view($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('Dashboard/humanResource/teacherview', ['teacher' => $teacher],);
    }

    public function Deleteteacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('/teachers')->with('success', 'Teacher deleted successfully');
    }


    //staff list
    public function staff(){

        return view('/Dashboard/humanResource/staff');
    }
    public function staffList(Request $request){
        if($request){
            $search = $request->input('search');
            $staffs = Staff::when($search, function ($query) use ($search) {
                $query->where('firstname', 'LIKE', '%' . $search . '%')
                    ->orWhere('lastname', 'LIKE', '%' . $search . '%')
                    ->orWhere('staff_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('designation', 'LIKE', '%' . $search . '%');
            })->get(); // Move get() outside of the when method
            return view('/Dashboard/humanResource/stafflist', ['staffs' => $staffs]);
        }
        else{
            $staffs = Staff::all();
            return view('/Dashboard/humanResource/stafflist', ['staffs' => $staffs]);
        }
    }

    public function addstaff(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birth_date' => 'required|string',
            'staff_id' => 'required|string',
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
        $isExist = Staff::where('email', $request->input('email'))
            ->orWhere('mobile', $request->input('mobile'))
            ->exists();

        if ($isExist) {
            return back()->with('fail', 'Failed. This Staff already exists');
        }

        $staff = new Staff();
        $staff->firstname = $request->input('firstname');
        $staff->lastname = $request->input('lastname');
        $staff->birth_date = $request->input('birth_date');
        $staff->staff_id = $request->input('staff_id');
        $staff->designation = $request->input('designation');
        $staff->section = $request->input('section');
        $staff->joindate = $request->input('joindate');
        $staff->gender = $request->input('gender');
        $staff->image = $image;
        $staff->present_address = $request->input('present_address');
        $staff->present_city = $request->input('present_city');
        $staff->present_state = $request->input('present_state');
        $staff->present_country = $request->input('present_country');
        $staff->present_zip_code = $request->input('present_zip_code');
        $staff->parmanent_address = $request->input('parmanent_address');
        $staff->parmanent_state = $request->input('parmanent_state');
        $staff->parmanent_city = $request->input('parmanent_city');
        $staff->parmanent_country = $request->input('parmanent_country');
        $staff->parmanent_zip_code = $request->input('parmanent_zip_code');
        $staff->email = $request->input('email');
        $staff->password = Hash::make($request->input('password'));
        $staff->mobile = $request->input('mobile');
        $staff->nid = $request->input('nid');
        $staff->role = 'staff';
        $staff->save();


        return redirect('/staffs')->with('success', 'Sucessfully created.');
    }

    public function staffedit($id)
    {
        $Staffs = Staff::findOrFail($id);
        return view('Dashboard/humanreSource/updateStaff', ['staffs' => $Staffs]);
    }
    
    public function staffupdate(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->firstname = $request->input('firstname');
        $staff->lastname = $request->input('lastname');
        $staff->birth_date = $request->input('birth_date');
        $staff->staff_id = $request->input('staff_id');
        $staff->designation = $request->input('designation');
        $staff->section = $request->input('section');
        $staff->joindate = $request->input('joindate');
        $staff->gender = $request->input('gender');
        $staff->present_address = $request->input('present_address');
        $staff->present_city = $request->input('present_city');
        $staff->present_state = $request->input('present_state');
        $staff->present_country = $request->input('present_country');
        $staff->present_zip_code = $request->input('present_zip_code');
        $staff->parmanent_address = $request->input('parmanent_address');
        $staff->parmanent_state = $request->input('parmanent_state');
        $staff->parmanent_city = $request->input('parmanent_city');
        $staff->parmanent_country = $request->input('parmanent_country');
        $staff->parmanent_zip_code = $request->input('parmanent_zip_code');
        $staff->email = $request->input('email');
        $staff->mobile = $request->input('mobile');
        $staff->nid = $request->input('nid');
        $staff->role = 'staff';
        $staff->save();
    
        return redirect('/staff-list')->with('success', 'Staff updated successfully');
    }

    public function staffview($id)
    {
        $staff = Staff::findOrFail($id);
        return view('Dashboard/humanResource/staffview', ['staff' => $staff],);
    }

    public function Deletestaff($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect('/staff-list')->with('success', 'Staff deleted successfully');
    }


  
}
