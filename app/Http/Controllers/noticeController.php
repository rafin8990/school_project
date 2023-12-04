<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function notice (){
        return view('notice');
    }
}
