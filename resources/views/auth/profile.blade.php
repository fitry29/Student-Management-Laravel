@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Teacher Profile</h3>
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
                        <a href="{{ route('students.index') }}">Dashboard</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Profile</a>
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
                            <form action="/save-profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="avatar avatar-xxl">
                                    @if ($user->image_path == "")
                                        <img src="{{asset('import/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded"/>
                                    
                                    @else
                                        <img src="{{ asset('images/'. $user->image_path) }}" alt="..." class="avatar-img rounded"/>
                                    @endif
								</div>
                                
                                <input type="hidden" class="form-control-file" id="currentImage" name="currentImage" value="{{$user->image_path}}">

                                <div class="form-group">
                                    <label for="image">Upload Your Image </label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name" value="{{ $user->name }}"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}"/>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-end">
                                    <input type="submit" class="btn btn-primary" value="Update Profile">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection