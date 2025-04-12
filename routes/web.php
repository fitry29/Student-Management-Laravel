<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest routes (Prevent logged-in users from accessing login/register)
Route::middleware(['isLoggedIn'])->group(function(){
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.submit');

    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
});

// Protected routes (Only accessible if authenticated)
Route::middleware(['auth'])->group(function(){

    //Dashboard
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/student/create', [StudentController::class, 'create'])->name('students.register');
    Route::post('/student', [StudentController::class, 'store'])->name('students.store');
    Route::get('/deleteStudent/{id}', [StudentController::class,'deleteStudent'])->name('student.detroy');
    Route::get('/edit-student/{id}', [StudentController::class,'editStudentView'])->name('student.edit');
    Route::post('/save-edit-student/{id}', [StudentController::class,'modifiedStudent'])->name('student.save-edit');

    Route::get('/getClass/{id}', [StudentController::class,'fetchClasses']);
    Route::get('/countStudents', [StudentController::class,'countStudent']);
    Route::get('/studentsJson', [StudentController::class,'getStudentJson']);


    Route::get('/course', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.register');
    Route::post('/course', [CourseController::class, 'store'])->name('course.store');
    Route::get('/deleteCourse/{id}', [CourseController::class,'deleteCourse'])->name('course.detroy');
    Route::get('/edit-course/{id}', [CourseController::class,'editCourseView'])->name('course.edit');
    Route::post('/save-edit-course/{id}', [CourseController::class,'modifiedCourse'])->name('course.save-edit');

    Route::get('/countCourses', [CourseController::class,'countCourses']);

    Route::get('/classes', [ClassesController::class, 'index'])->name('classes.index');
    Route::get('/classes/create', [ClassesController::class, 'create'])->name('classes.register');
    Route::post('/classes', [ClassesController::class, 'store'])->name('classes.store');
    Route::get('/deleteClasses/{id}', [ClassesController::class,'deleteClasses'])->name('classes.detroy');
    Route::get('/edit-classes/{id}', [ClassesController::class,'editClassView'])->name('classes.edit');
    Route::post('/save-edit-classes/{id}', [ClassesController::class,'modifiedClasses'])->name('classes.save-edit');

    Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::post('/save-profile/{id}', [UserController::class, 'editProfile'])->name('profile.edit');

    Route::get('/countClasses', [ClassesController::class,'countClasses']);

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});



// Route::get('/', function () {
//     return view('pages.dashboard');
// })->name('dashboard');

// Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [UserController::class, 'register']);

// Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [UserController::class, 'login']);

// Route::post('/logout', [UserController::class, 'logout'])->name('logout');



// Route::get('/students', function () {
//     return view('pages.student');
// })->name('students');

// Route::get('/students', [StudentController::class, 'index'])->name('students.index');
// Route::get('/student/create', [StudentController::class, 'create'])->name('students.register');
// Route::post('/student', [StudentController::class, 'store'])->name('students.store');
// Route::get('/deleteStudent/{id}', [StudentController::class,'deleteStudent'])->name('student.detroy');
// Route::get('/edit-student/{id}', [StudentController::class,'editStudentView'])->name('student.edit');
// Route::post('/save-edit-student/{id}', [StudentController::class,'modifiedStudent'])->name('student.save-edit');

// Route::get('/course', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/course/create', [CourseController::class, 'create'])->name('course.register');
// Route::post('/course', [CourseController::class, 'store'])->name('course.store');
// Route::get('/deleteCourse/{id}', [CourseController::class,'deleteCourse'])->name('course.detroy');
// Route::get('/edit-course/{id}', [CourseController::class,'editCourseView'])->name('course.edit');
// Route::post('/save-edit-course/{id}', [CourseController::class,'modifiedCourse'])->name('course.save-edit');

