<?php

namespace App\Http\Controllers\migration;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class migrationController extends Controller
{
    public function migration(Request $request){
        if ($request) {
            $class = $request->input('class');
            $section = $request->input('section');
            $year = $request->input('year');
            $students = Student::when($class, function ($query) use ($class) {
                return $query->where('class', $class);
            })->when($section, function ($query) use ($section) {
                return $query->where('section', $section);
            })->when($year, function ($query) use ($year) {
                return $query->where('year', $year);
            })->get();
            $classes = Classes::pluck('class', 'class');
            return view('Dashboard/migration/studentMigration', ['students' => $students], compact('classes'));
        } else {
            $students = Student::all();
            $classes = Classes::pluck('class', 'class');
            return view('Dashboard/migration/studentMigration', ['students' => $students], compact('classes'));
        }
        
    }



    public function migrateStudent(Request $request)
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
        
        // $student = new Student();
        // $student->first_name = $request->input('first_name');
        // $student->last_name = $request->input('last_name');
        // $student->birth_date = $request->input('birth_date');
        // $student->student_id = $request->input('student_id');
        // $student->class = $request->input('class');
        // $student->section = $request->input('section');
        // $student->year = $request->input('year');
        // $student->gender = $request->input('gender');
        // $student->image = $image;
        // $student->present_address = $request->input('present_address');
        // $student->present_street = $request->input('present_street');
        // $student->present_city = $request->input('present_city');
        // $student->present_country = $request->input('present_country');
        // $student->present_zip_code = $request->input('present_zip_code');
        // $student->parmanent_address = $request->input('parmanent_address');
        // $student->parmanent_street = $request->input('parmanent_street');
        // $student->parmanent_city = $request->input('parmanent_city');
        // $student->parmanent_country = $request->input('parmanent_country');
        // $student->parmanent_zip_code = $request->input('parmanent_zip_code');
        // $student->email = $request->input('email');
        // $student->password = Hash::make($request->input('password'));
        // $student->phoneNumber = $request->input('phoneNumber');
        // $student->role = 'student';
        // $student ->school_code=$request->input('school_code');
        // $student->save();
        // return redirect('/add-student')->with('success', 'Sucessfully created.');

         foreach ($request->student_id as $student_id)
    
            $data[]=[
                "student_id"=>$student_id,
                "first_name"=>$request->first_name[$student_id],
                "last_name"=>$request->last_name[$student_id],
                "birth_date" =>$request->birth_date[$student_id],
                "class" =>$request->class,
                "section"=>$request->section,
                "year" =>$request->year,
                "gender" =>$request->gender[$student_id],
                "image" =>$request->image[$student_id],
                "present_address"=>$request->present_address[$student_id],
                "present_street" =>$request->present_street[$student_id],
                "present_city" =>$request->present_city[$student_id],
                "present_country" =>$request->present_country[$student_id],
                "present_zip_code"=>$request->present_zip_code[$student_id],
                "parmanent_address"=>$request->parmanent_address[$student_id],
                "parmanent_street" =>$request->parmanent_street[$student_id],
                "parmanent_city" =>$request->parmanent_city[$student_id],
                "parmanent_country" =>$request->parmanent_country[$student_id],
                "parmanent_zip_code"=>$request->parmanent_zip_code[$student_id],
                "email"=>$request->email[$student_id],
                "password" =>$request->password[$student_id],
                "phoneNumber" =>$request->phoneNumber[$student_id],
                "role" =>$request->role,
                "school_code"=>$request->school_code,
            ];
            Student::insert($data);
    }
}
