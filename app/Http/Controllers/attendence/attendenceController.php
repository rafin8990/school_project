<?php

namespace App\Http\Controllers\attendence;

use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class attendenceController extends Controller
{

    public function attendence(Request $request)
    {
        if ($request) {
            $class = $request->input('class');
            $section = $request->input('section');
            $classes = Classes::pluck('class', 'class');
            return view('/Dashboard/attendence/studentAttendence', compact('classes'));
        }
    }
    public function updateAttendence(Request $request)
    {
        if ($request) {
            $class = $request->input('class');
            $section = $request->input('section');
            $classes = Classes::pluck('class', 'class');
            return view('/Dashboard/attendence/updateAttendence', compact('classes'));
        }
    }


    public function search(Request $request)
    {
       
        $class = $request->input('class');
        $section = $request->input('section');
       $classes = Classes::pluck('class', 'class');
        $date = $request->input('date');

        // Check if attendance for the given class, section, and date exists
        $existingAttendance = Attendance::where('class_id', $class)
            ->where('section_id', $section)
            ->where('att_date', $date)
            ->exists();
        //dd($existingAttendance);
        if ($existingAttendance) {
            // Attendance already taken, display notification
            //return view('/Dashboard/home/main', ['notification' => 'Attendance already taken for this day.']);
            return redirect('/attendence')->with('fail', ' attendence already taken');
        } 
        else {
            // Attendance not taken, retrieve student list for the given class and section
            if ($request) {
                $class = $request->input('class');
                $section = $request->input('section');
                $students = Student::when($class, function ($query) use ($class) {
                    return $query->where('class', $class);
                })->when($section, function ($query) use ($section) {
                    return $query->where('section', $section);
                })->get();
                $classes = Classes::pluck('class', 'class');
                return view('/Dashboard/attendence/viewAttendance', ['students' => $students, 'date' => $date,compact('classes')]);
            }
            
        }
    }












public function attendance_store(Request $request)
    {
     
        //dd($request);
        $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'att_date' => 'required',
            'student_id' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',
        ]);

        foreach ($request->student_id as $student_id) 
            $data[]=[
               
                "student_id"=>$student_id,
                "attendence"=>$request->attendence[$student_id],
                "att_date" =>$request->att_date,
                "class_id" =>$request->class_id,
                "section_id" =>$request->section_id,
                "edit_date" =>'',
                "school_code"=>$request->school_code,
                "first_name"=>$request->first_name[$student_id],
                "last_name"=>$request->last_name[$student_id],
            ];
            Attendance::insert($data);
             
            return redirect('/attendence')->with('success', ' attendence successfully taken');
         
       
}

public function updateAttendance(Request $request)
{
    
    $class = $request->input('class');
    $section = $request->input('section');
   $classes = Classes::pluck('class', 'class');
    $date = $request->input('date');

    // Check if attendance for the given class, section, and date exists
    $existingAttendance = Attendance::where('class_id', $class)
        ->where('section_id', $section)
        ->where('att_date', $date)
        ->exists();
 

    if ($existingAttendance) {
        if ($request) {
            $class = $request->input('class');
            $section = $request->input('section');
            $students = Student::when($class, function ($query) use ($class) {
                return $query->where('class', $class);
            })->when($section, function ($query) use ($section) {
                return $query->where('section', $section);
            })->get();
            $classes = Classes::pluck('class', 'class');
            $attendances = Attendance::
            where('class_id', $class)
            ->where('section_id', $section)
            ->where('att_date', $date)->get();


            // Retrieve all attendance records with associated student names
            return view('/Dashboard/attendence/editAttendence', ['attendances' => $attendances,compact('attendances'), 'date' => $date,compact('classes')]);
        
    } 
}
    else {
        // Attendance not taken, retrieve student list for the given class and section
        return redirect('/attendence')->with('fail', ' attendence not taken');
        }
        
    

}

public function editAttendance(Request $request)
{
    // dd($request);
    // foreach ($request->student_id as $student_id)
    
    //         $data[]=[
    //             "student_id"=>$student_id,
    //             "attendence"=>$request->attendance[$student_id],
    //             "att_date" =>$request->att_date,
    //             "class_id" =>$request->class_id,
    //             "section_id" =>$request->section_id,
    //             "edit_date" =>'',
    //             "school_code"=>$request->school_code,
    //             "first_name"=>$request->first_name[$student_id],
    //             "last_name"=>$request->last_name[$student_id],
    //         ];
            foreach ($request->student_id as $student_id)
            DB::table('attendances')
            ->where('student_id',$student_id)
            ->where('att_date',$request->att_date)
            ->update([
                'attendence' => $request->attendance[$student_id]
            ]);
           
            
            
            
            
             
            return redirect('/attendence')->with('success', ' attendence successfully updated');
         
       
} 
     
      
        
   

}