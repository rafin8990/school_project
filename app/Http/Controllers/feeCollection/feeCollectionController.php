<?php

namespace App\Http\Controllers\feeCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class feeCollectionController extends Controller
{
    public function createInvoice(){
        return view('/Dashboard/feeCollection/createInvoice');
    }
    public function invoiceIndividual(){
        return view('/Dashboard/feeCollection/invoiceIndividual');
    }
    public function invoiceList(){
        return view('/Dashboard/feeCollection/invoiceList');
    }
}
