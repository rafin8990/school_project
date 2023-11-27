<?php
namespace App\Http\Controllers\academics;

use App\Models\Classes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class academicController extends Controller
{
    public function class ()
    {
        $classes = Classes::all();
        return view('/Dashboard/academics/class',['classes' => $classes]);
    }

    public function class_post(Request $request)
    {
        $this->validate($request, [
            'class' => 'required|string',
        ]);
    
        $class1 = Classes::where('class', $request->input('class'))->first();
    
    
        if ($class1) {
            return back()->with('fail', 'Failed. This class already exists');
        }
    
        $class = new Classes();
        $class->class = $request->input('class');
        $class->save();
    
        return redirect('/class')->with('success', 'Sucessfully created.');
    }

   


    public function section()
    {
        return view('/Dashboard/academics/section');
    }
    public function subject()
    {
        return view('/Dashboard/academics/subject');
    }
}
