<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; 
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('pages.course', ['courses' => $courses]);
    }
    public function create(){
        return view('pages.register_course');
    }
    public function store(Request $request){
        $data = $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
        ]);

        $newCourse = Course::create($data);

        return redirect(route('courses.index'));
    }

    public function editCourseView($id){
        $courses = Course::find($id);
        return view('pages.edit_course',['courses' => $courses]);
    }

    public function modifiedCourse($id, Request $request){
        $data = Course::find($id);

        $data->course_name = $request->course_name;
        $data->course_code = $request->course_code;

        $data->save();

        return redirect(route('courses.index'));
    }

    public function deleteCourse($id){
        $data = Course::find($id);
        $data->delete();
        return redirect(route('courses.index'));
    }

    public function countCourses(){
        $count = DB::table('courses')->count();
        return response()->json($count);
    }
}
