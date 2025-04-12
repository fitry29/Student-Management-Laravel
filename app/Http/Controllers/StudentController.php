<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Models\Student; 
use App\Models\Course; 
use App\Models\Classes;

class StudentController extends Controller
{
    //
    public function index(){
        // $students = Student::all();
        $students = DB::table('students')
            ->join('courses', 'courses.id', '=', 'students.course_id')
            ->join('classes', 'classes.id', '=', 'students.class_id')
            ->select('students.*','courses.course_name','courses.course_code','students.class_id','classes.classes_name')
            ->get();
        return view('pages.student', ['students' => $students]);
    }
    public function create(){
        $courses = Course::all(); 
        $classes = Classes::all();
        //to display option
        return view('pages.register_student', ['courses' => $courses, 'classes' => $classes]);
    }
    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course_id' => 'required',
            'class_id' => 'required',
        ]);

        $newStudent = Student::create($data);

        return redirect(route('students.index'))->with('success','New student information store successfully');
    }
    public function editStudentView($id){
        $student = Student::find($id);
        $courses = Course::all();
        $classes = Classes::all();

        return view('pages.edit_student',['student' => $student, 'course' => $courses, 'classes' => $classes]);
    }

    public function modifiedStudent($id, Request $request){
        $student = Student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course_id;
        $student->class_id = $request->class_id;

        $student->save();

        return redirect(route('students.index'))->with('success','Student information edited successfully');
    }

    public function deleteStudent($id){
        $data = Student::find($id);
        $data->delete();
        return redirect(route('students.index'))->with('success','Student deleted successfully');;
    }

    public function fetchClasses($course_id){
        $classes = Classes::where('courses_id',$course_id)->get();
        return response()->json($classes);
    } 

    public function countStudent(){
        $count = DB::table('students')->count();
        return response()->json($count);
    }

    public function getStudentJson(){
        // $students = Student::all();
        $students = DB::table('students')
            ->join('courses', 'courses.id', '=', 'students.course_id')
            ->join('classes', 'classes.id', '=', 'students.class_id')
            ->select('students.*','courses.course_name','courses.course_code','students.class_id','classes.classes_name')
            ->get();
            return response()->json($students);
    }
}
