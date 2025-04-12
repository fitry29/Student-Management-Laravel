@extends('layouts.default')
@section('content')
    <div class="container">
          <div class="page-inner">
                @if (session()->has('success'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{session()->get('success')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <!-- <button type="button" class="btn btn-info" id="alert_demo_3_4">{{session()->get('success')}}</button> -->
                @endif
            <!-- Card -->
            <h3 class="fw-bold mb-3">Dashboard</h3>

            <!-- Row Card No Padding -->
            <div class="row row-card-no-pd">
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Total Students</p>
                          <h4 class="card-title" id="total_students"></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Total Course</p>
                          <h4 class="card-title" id="total_courses"></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Total Classes</p>
                          <h4 class="card-title" id="total_classes" ></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Student Course Pie Chart</div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas
                        id="pieChart"
                        style="width: 50%; height: 50%"
                      ></canvas>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection