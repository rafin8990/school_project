<?php

namespace App\Http\Controllers\library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function addRack(){
        return view('/Dashboard/library/addRack');
    }
    public function bookList(){
        return view('/Dashboard/library/bookList');
    }
    public function issueReturn(){
        return view('/Dashboard/library/issueReturn');
    }
}
