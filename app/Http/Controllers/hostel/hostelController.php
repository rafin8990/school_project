<?php

namespace App\Http\Controllers\hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hostelController extends Controller
{
    public function feesCollection(){
        return view('/Dashboard/hostel/feesCollection');
    }
    public function hostel(){
        return view('/Dashboard/hostel/hostel');
    }
    public function member(){
        return view('/Dashboard/hostel/member');
    }
}
