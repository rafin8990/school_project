<?php

namespace App\Http\Controllers\attendence;

use App\Models\Classes;
use App\Models\Section;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class attendenceController extends Controller
{
    public function attendence(Request $request){
        $class = $request->input('class');
        $section = $request->input('section');
        $students = Student::when($class, function ($query) use ($class) {
            return $query->where('class', $class);
        })->when($section, function ($query) use ($section) {
            return $query->where('section', $section);
        })->get();
        $classes = Classes::pluck('class', 'class');
        return view('/Dashboard/attendence/studentAttendence',['students' => $students], compact('classes'));
    }
    public function updateAttendence(){
        return view('/Dashboard/attendence/updateAttendence');
    }
}
