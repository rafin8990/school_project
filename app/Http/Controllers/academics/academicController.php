<?php
namespace App\Http\Controllers\academics;

use App\Models\Classes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class academicController extends Controller
{
    public function class ()
    {
        return view('/Dashboard/academics/class');
    }

    public function classpost(Request $request)
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
    
        return redirect()->route('class.index')->with('success', 'Successfully Class created.');
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
