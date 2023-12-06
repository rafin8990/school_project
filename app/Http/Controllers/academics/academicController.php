<?php
namespace App\Http\Controllers\academics;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class academicController extends Controller
{
    // Create and view classes
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
    public function classEdit($id)
    {
        $classes = Classes::findOrFail($id);
        return view('Dashboard/academics/updateClass', ['classes' => $classes]);
    }
    public function classupdate(Request $request, $id)
    {
        $class = Classes::findOrFail($id);
        $class->class = $request->input('class');
        $class->save();
        return redirect('/class')->with('success', 'Class Updated successfully'); 
    }

    public function Deleteclass($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
        return redirect('/class')->with('success', 'Class deleted successfully');
    }
   

//  create and view sections
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

    public function sectionEdit($id)
    {
        $classes = Classes::all();
        $section = Section::findOrFail($id);
        return view('Dashboard/academics/updateSection', ['section' => $section,'classes' => $classes]);
    }
    public function sectionupdate(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->class = $request->input('class');
        $section->section = $request->input('section');
        $section->save();

        return redirect('/section')->with('success', 'Sucessfully created.');
    }

    public function Deletesection($id)
    {
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect('/section')->with('success', 'Section deleted successfully');
    }
   


    
    
    

// create and view subject
    public function subject()
    {
        $subjects = Subject::all();
        return view('/Dashboard/academics/subject',['subjects' => $subjects]);
    }
    public function subject_post(Request $request){
        $this->validate($request, [
            'subject' => 'required|string',
        ]);
    
        $subject = Subject::where('subject', $request->input('subject'))->first();
    
    
        if ($subject) {
            return back()->with('fail', 'Failed. This subject already exists');
        }
    
        $subject = new Subject();
        $subject->subject = $request->input('subject');
        $subject->save();
    
        return redirect('/subject')->with('success', 'Sucessfully created.');
    }
}
