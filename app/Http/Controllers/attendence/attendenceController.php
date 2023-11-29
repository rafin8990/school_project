<?php

namespace App\Http\Controllers\attendence;

use App\Models\Classes;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class attendenceController extends Controller
{
    public function attendence(){
        $classes = Classes::all();
        $section = Section::all();
        return view('/Dashboard/attendence/studentAttendence',['classes' => $classes,'sections'=>$section]);
    }
    public function updateAttendence(){
        return view('/Dashboard/attendence/updateAttendence');
    }
}
