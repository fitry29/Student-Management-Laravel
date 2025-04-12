<!DOCTYPE html>
<html lang="en">
      @include('includes.head')
  
    <body>
        <div class="container">
            <div class="page-inner">
                <div class="page-header mb-5 mt-5">
                    <h3 class="fw-bold mb-3 text-center">Register to System</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h4 class="card-title">Login</h4>
                            </div> -->
                            <div class="card-body">
                                <form action="{{ route('register.submit') }}" method="post">
                                    @csrf
                                        <div class="form-group col-md-12">
                                            <label for="name">Name</label>
                                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter your name"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Register as</label>
                                            <select class="form-select form-control" id="type" name="type">
                                                <option value = "teacher" >Teacher</option>
                                                <option value = "Student" >Student</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"/>
                                        </div>

                                        <div class="form-group col-md-12 d-flex justify-content-end align-items-end">
                                            <input class="btn btn-primary col-md-3" type="submit" value="Register" />
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>