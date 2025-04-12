<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Classes;
use App\Models\Course;

class ClassesController extends Controller
{
    //
    public function index(){
        $classes = DB::table('classes')
        ->join('courses', 'courses.id', '=', 'classes.courses_id')
        ->select('classes.*','courses.course_name','courses.course_code')
        ->get();
        // $classes = Classes::all();
        // $courses = Course::all(); 
        return view('pages.classes', ['classes' => $classes]);
    }

    public function create(){
        $courses = Course::all(); 
        return view('pages.register_classes', ['courses' => $courses]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'classes_name' => 'required',
            'courses_id' => 'required',
        ]);

        $newClasses = Classes::create($data);

        return redirect(route('classes.index'))->with('success','New class store successfully');
    }
    
    public function editClassView($id){
        $classes = Classes::find($id);
        $courses = Course::all(); 

        return view('pages.edit_classes', ['classes' => $classes, 'courses' => $courses]);
    }

    public function modifiedClasses($id, Request $request){
        $data = Classes::find($id);
        
        $data->classes_name = $request->classes_name;
        $data->courses_id = $request->courses_id;

        $data->save();

        return redirect(route('classes.index'))->with('success','Class information edited successfully');
    } 

    public function deleteClasses($id){
        $data = Classes::find($id);
        $data->delete();

        return redirect(route('classes.index'))->with('success','Class information deleted successfully');
    }

    public function countClasses(){
        $count = DB::table('classes')->count();
        return response()->json($count);
    }
}
