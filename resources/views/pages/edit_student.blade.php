@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Student Update</h3>
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
                        <a href="#">Student Update</a>
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
                            <form action="/save-edit-student/{{$student->id}}" method="post" >
                                @csrf
                                @method('post')
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name" value="{{ $student->name }}" placeholder="Enter student name"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" placeholder="Enter student email"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="phone">Phone No</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}" placeholder="Enter student phone number"/>
                                </div>
                                <div class="form-group">
                                    <label for="course_id">Default Select</label>
                                    <select class="form-select form-control" id="course_id" name="course_id">
                                        @foreach ($course as $c )
                                            @if($c->id == $student->course_id){
                                                <option value = {{ $c->id }} selected> {{ $c->course_name }} </option>
                                            }
                                            @else
                                                {
                                                <option value = {{ $c->id }} > {{ $c->course_name }} </option>
                                                }
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="class_id">Select Class</label>
                                    <select class="form-select form-control" id="class_id" name="class_id">
                                        @foreach ($classes as $cls )
                                            @if($cls->id == $student->class_id){
                                                <option value = {{ $c->id }} selected> {{$cls->classes_name}} </option>
                                            }
 
                                            @endif
                                            
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Update Student">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection