<?php
namespace App\Http\Controllers\academics;

use App\Models\Classes;
use App\Models\Section;
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
        $classes = Classes::all();
        $section = Section::all();
        return view('/Dashboard/academics/section',['classes' => $classes,'sections'=>$section]);
    }

    public function section_post(Request $request)
    {
        $this->validate($request, [
                'class' => 'required|string',
                'section' => 'required|string',
            ]);
        $existingSection=Section::where('class',$request->input('class'))->where('section', $request->input('section'))->first();

        if($existingSection){
            return back()->with('fail', 'Failed. This Section already exists');
        }

        $section =new Section();
        $section->class = $request->input('class');
        $section->section = $request->input('section');
        $section->save();

        return redirect('/section')->with('success', 'Sucessfully created.');
        
    }
    public function subject()
    {
        return view('/Dashboard/academics/subject');
    }
}
