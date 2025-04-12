@extends('layouts.default')
@section('content')
    <div class="container">
        @if (session()->has('success'))
            <!-- Modal -->
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="page-inner">
                @if (session()->has('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{session()->get('success')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <!-- <button type="button" class="btn btn-info" id="alert_demo_3_4">{{session()->get('success')}}</button> -->
                @endif
            <div class="page-header">
                <h3 class="fw-bold mb-3">Student List</h3>
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
                        <a href="#">Student List</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 d-flex justify-content-end" ><a class="btn btn-primary" href="{{ route('students.register') }}" >Register Student</a></div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Students</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Course</th>
                                            <th>Course Code</th>
                                            <th>Class</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Course</th>
                                            <th>Course Code</th>
                                            <th>Class</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($students as $s)
                                            <tr>
                                                <td>{{ $s->id }}</td>
                                                <td>{{ $s->name }}</td>
                                                <td> {{ $s->email }}</td>
                                                <td>{{ $s->phone }}</td>
                                                <td>{{ $s->course_name }}</td>
                                                <td>{{ $s->course_code }}</td>
                                                <td>{{ $s->classes_name }}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="/edit-student/{{ $s->id }}" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="/deleteStudent/{{ $s->id }}" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection