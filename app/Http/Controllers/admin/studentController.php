<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function studentList(){
        return view('Dashboard/student/studentList');
    }
    public function addStudent(){
        return view('Dashboard/student/addStudent');
    }
}
