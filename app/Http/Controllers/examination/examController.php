<?php

namespace App\Http\Controllers\examination;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class examController extends Controller
{
    public function examList(){
        return view('/Dashboard/examination/examList');
    }
    public function markImport(){
        return view('/Dashboard/examination/markImport');
    }
}
