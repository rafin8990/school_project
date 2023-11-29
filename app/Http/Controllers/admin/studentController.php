<?php

namespace App\Http\Controllers\admin;

use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function studentList()
    {
        $students = Student::all();
        $classes = Classes::pluck('class', 'class');
        return view('Dashboard/student/studentList',['students'=>$students],compact('classes'));
    }

    public function addStudent(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth_date' => 'required|string',
            'student_id' => 'required|string',
            'class' => 'required|string',
            'section' => 'required|string',
            'year' => 'required|string',
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'present_address' => 'required|string',
            'present_street' => 'required|string',
            'present_city' => 'required|string',
            'present_country' => 'required|string',
            'present_zip_code' => 'required|string',
            'parmanent_address' => 'required|string',
            'parmanent_street' => 'required|string',
            'parmanent_city' => 'required|string',
            'parmanent_country' => 'required|string',
            'parmanent_zip_code' => 'required|string',
            'email' => 'required|string',
            'phoneNumber' => 'required|string',
            'password' => 'required|string|min:4',
        ]);



        $image = $request->file('image')->getClientOriginalName();

        $path = 'assets/images';
        $imagePath = $request->file('image')->move($path, $image);
        $isExist = Student::where('email', $request->input('email'))
            ->orWhere('phoneNumber', $request->input('phoneNumber'))
            ->exists();

        if ($isExist) {
            return back()->with('fail', 'Failed. This Student already exists');
        }

        $student = new Student();
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->birth_date = $request->input('birth_date');
        $student->student_id = $request->input('student_id');
        $student->class = $request->input('class');
        $student->section = $request->input('section');
        $student->year = $request->input('year');
        $student->gender = $request->input('gender');
        $student->image = $image;
        $student->present_address = $request->input('present_address');
        $student->present_street = $request->input('present_street');
        $student->present_city = $request->input('present_city');
        $student->present_country = $request->input('present_country');
        $student->present_zip_code = $request->input('present_zip_code');
        $student->parmanent_address = $request->input('parmanent_address');
        $student->parmanent_street = $request->input('parmanent_street');
        $student->parmanent_city = $request->input('parmanent_city');
        $student->parmanent_country = $request->input('parmanent_country');
        $student->parmanent_zip_code = $request->input('parmanent_zip_code');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->save();


        return redirect('/add-student')->with('success', 'Sucessfully created.');

    }
    public function addStudentForm()
    {
        $classes = Classes::pluck('class', 'class');
        return view('Dashboard/student/addStudent', compact('classes'));
    }
    public function getSections($className)
    {
        $class = Classes::where('class', $className)->first();

        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }

        $sections = Section::where('class', $class->class)->pluck('section', 'section');
        return response()->json($sections);
    }

    public function getClassSection($className)
    {
        $class = Classes::where('class', $className)->first();

        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }

        $sections = Section::where('class', $class->class)->pluck('section', 'section');
        return response()->json($sections);
    }


}
