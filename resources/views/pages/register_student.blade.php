@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Student Registration</h3>
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
                        <a href="{{ route('students.index') }}">Student List</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Student Registration</a>
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
                            <form action="{{ route('students.store') }}" method="post" >
                                @csrf
                                @method('post')
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="Enter student name"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter student email"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="phone">Phone No</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter student phone number"/>
                                </div>
                                <div class="form-group">
                                    <label for="course_id">Select Course</label>
                                    <select class="form-select form-control" id="course_id" name="course_id">
                                        <option value = '0' > Select student course </option>
                                        @foreach ($courses as $c )
                                            <option value = {{ $c->id }} > {{ $c->course_name }} - D{{ $c->course_code }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="class_id">Select Class</label>
                                    <select class="form-select form-control" id="class_id" name="class_id">
                                        <!-- @foreach ($classes as $cls )
                                            <option value = {{ $cls->id }} > {{$cls->classes_name}} </option>
                                        @endforeach -->
                                    </select>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Register Student">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection