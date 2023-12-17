<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthoriserController extends Controller
{
    public function authoriser (){
        return view("/Dashboard/administration/headTeacher");
    }
    public function addHeadTeacher (){
        return view("/Dashboard/administration/addHeadTeaher");
    }
}
