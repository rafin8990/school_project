<?php

namespace App\Http\Controllers\transport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class transportController extends Controller
{
    public function route(){
        return view('/Dashboard/transport/route');
    }
    public function vehicles(){
        return view('/Dashboard/transport/vehicles');
    }
}
