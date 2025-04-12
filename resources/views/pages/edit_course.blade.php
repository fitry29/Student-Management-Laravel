@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Course Edit</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                        <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('courses.index') }}">Course List</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Course Edit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4 class="card-title">Courses</h4>
                        </div> -->
                        <div class="card-body">
                            <form action="/save-edit-course/{{$courses->id}}" method="post" >
                                @csrf
                                @method('post')
                                <div class="form-group col-md-12">
                                    <label for="course_name">Course Name</label>
                                    <input type="name" class="form-control" id="course_name" name="course_name" value="{{ $courses->course_name }}" placeholder="Enter course name"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="course_code">Courrse Code</label>
                                    <input type="text" class="form-control" id="course_code" name="course_code" value="{{ $courses->course_code}}" placeholder="Enter course code"/>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Update Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection