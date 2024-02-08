<?php

namespace App\Http\Controllers\feeCollection;

use App\Models\Classes;
use App\Models\Feecollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class feeCollectionController extends Controller
{

// create invoice
    public function createInvoice(){
        $classes = Classes::all();
        return view('/Dashboard/feeCollection/createInvoice',['classes' => $classes]);
    }

    public function invoicecreate(Request $request)
    {
        $this->validate($request, [
                'class' => 'required|string',
                'year' => 'required|string',
                'month' => 'required|string',
                'admission_fee' => 'required|string',
                'tuition_fee' => 'required|string',
                'library_fee' => 'required|string',
                'transport_fee' => 'required|string',
                'curriculum_fee' => 'required|string',
            ]);

            
           
        $existingInvoice=Feecollection::where('class',$request->input('class'))->where('year', $request->input('year'))->where('month', 
        $request->input('month'))->first();
        // dd($existingInvoice);
        
        if($existingInvoice){
            return back()->with('fail', 'Failed. This invoice already exists');
        }
        else{
            $feecollection =new Feecollection();
            $feecollection->class = $request->input('class');
            $feecollection->year = $request->input('year');
            $feecollection->month = $request->input('month');
            $feecollection->admission_fee = $request->input('admission_fee');
            $feecollection->tuition_fee = $request->input('tuition_fee');
            $feecollection->library_fee = $request->input('library_fee');
            $feecollection->transport_fee = $request->input('transport_fee');
            $feecollection->curriculum_fee = $request->input('curriculum_fee');
            $feecollection ->school_code=$request->input('school_code');
            $feecollection->save();
    
            return redirect('/create-invoice')->with('success', 'Sucessfully created.');
        }

       
        
    }

    public function invoiceIndividual(){
        return view('/Dashboard/feeCollection/invoiceIndividual');
    }
    public function invoiceList(){
        $feeCollections = Feecollection::all();
        return view('/Dashboard/feeCollection/invoiceList', ['feeCollections'=>$feeCollections]);
    }

    public function DeleteInvoice($id)
    {
        $invoice = Feecollection::findOrFail($id);
        $invoice->delete();
        return redirect('/invoice-list')->with('success', 'Invoice deleted successfully');
    }
}
