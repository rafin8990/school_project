<?php

namespace App\Http\Controllers\humanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class humanResourceController extends Controller
{
    public function teachers(){
        return view('/Dashboard/humanResource/teachers');
    }
    public function addTeachers(){
        return view('/Dashboard/humanResource/addteacher');
    }
    public function staff(){
        return view('/Dashboard/humanResource/staff');
    }
    public function staffList(){
        return view('/Dashboard/humanResource/staffList');
    }
    
    public function designation(){
        return view('/Dashboard/humanResource/designation');
    }
    public function department(){
        return view('/Dashboard/humanResource/department');
    }
}
