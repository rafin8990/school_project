<?php

namespace App\Http\Controllers\attendence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class attendenceController extends Controller
{
    public function attendence(){
        return view('/Dashboard/attendence/studentAttendence');
    }
    public function updateAttendence(){
        return view('/Dashboard/attendence/updateAttendence');
    }
}
