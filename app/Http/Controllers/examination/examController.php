<?php

namespace App\Http\Controllers\examination;

use App\Models\Classes;
use App\Models\Exam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class examController extends Controller
{
    public function examList(){
        $classes = Classes::all();
        $exams = Exam::all();
        return view('/Dashboard/examination/examList',['classes' => $classes,'exams'=>$exams]);
    }

    public function exam_list(Request $request) {
        $this->validate($request, [
            'class' => 'required|string',
            'exam' => 'required|string',
        ]);
    $existingExam=Exam::where('class',$request->input('class'))->where('exam', $request->input('exam'))->first();

    if($existingExam){
        return back()->with('fail', 'Failed. This Exam already exists');
    }

    $exam =new Exam();
    $exam->class = $request->input('class');
    $exam->exam = $request->input('exam');
    $exam ->school_code=$request->input('school_code');
    $exam->save();

    return redirect('/exam-list')->with('success', 'Sucessfully created.');
    }

    public function markImport(){
        return view('/Dashboard/examination/markImport');
    }
}
