<?php

namespace App\Http\Controllers\examReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class examReportController extends Controller
{
    public function transcript(){
        return view('/Dashboard/examReports/transcript');
    }
    public function possoinList(){
        return view('/Dashboard/examReports/possoinList');
    }
    public function passList(){
        return view('/Dashboard/examReports/passList');
    }
    public function failList(){
        return view('/Dashboard/examReports/failList');
    }
}
