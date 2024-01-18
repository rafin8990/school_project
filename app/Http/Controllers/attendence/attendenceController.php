<?php

namespace App\Http\Controllers\attendence;

use App\Models\Attendance;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class attendenceController extends Controller
{

    public function attendence(Request $request)
    {
        if ($request) {
            $class = $request->input('class');
            $section = $request->input('section');
            $students = Student::when($class, function ($query) use ($class) {
                return $query->where('class', $class);
            })->when($section, function ($query) use ($section) {
                return $query->where('section', $section);
            })->get();
            $classes = Classes::pluck('class', 'class');
            return view('/Dashboard/attendence/studentAttendence', ['students' => $students], compact('classes'));
        } else {
            $students = Student::all();
            $classes = Classes::pluck('class', 'class');
            return view('/Dashboard/attendence/studentAttendence', ['students' => $students], compact('classes'));
        }

    }

    public function saveAttendance(Request $request)
    {

        // Check if attendance already taken
        $exists = Attendance::where([
            'date' => $request->date,
            'class' => $request->class,
            'section' => $request->section,
        ])->exists();

        if ($exists) {
            return back()->with('error', 'Attendance already taken for this day.');
        }

        foreach ($request->students as $studentId => $attendance) {
            Attendance::create([
                'date' => $request->date,
                'class' => $request->class,
                'section' => $request->section,
                'student_id' => $studentId,
                'attendance' => $attendance,
            ]);
        }

        return redirect()->route('attendance.index')->with('success', 'Attendance saved successfully.');

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

    public function updateAttendence()
    {
        return view('/Dashboard/attendence/updateAttendence');
    }
}
