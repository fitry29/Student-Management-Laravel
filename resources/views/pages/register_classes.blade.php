@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Class Entry</h3>
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
                        <a href="{{ route('classes.index') }}">Class List</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Class Entry</a>
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
                            <form action="{{ route('classes.store') }}" method="post" >
                                @csrf
                                @method('post')
                                <div class="form-group col-md-12">
                                    <label for="classes_name">Class Name</label>
                                    <input type="classes_name" class="form-control" id="classes_name" name="classes_name" placeholder="Enter class name"/>
                                </div>
                                <div class="form-group">
                                    <label for="courses_id">Select Course</label>
                                    <select class="form-select form-control" id="courses_id" name="courses_id">
                                        @foreach ($courses as $c )
                                            <option value = {{ $c->id }} > {{ $c->course_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Register Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection