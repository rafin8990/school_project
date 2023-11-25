<?php

namespace App\Http\Controllers\academics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class academicController extends Controller
{
    public function class(){
        return view('/Dashboard/academics/class');
    }
    public function section(){
        return view('/Dashboard/academics/section');
    }
    public function subject(){
        return view('/Dashboard/academics/subject');
    }
}
