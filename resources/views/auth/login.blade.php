<!DOCTYPE html>
<html lang="en">
      @include('includes.head')
  
    <body>
        <div class="container">
            <div class="page-inner">
                <div class="page-header mb-5 mt-5">
                    <h3 class="fw-bold mb-3 text-center">Log In Student Management System</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h4 class="card-title">Login</h4>
                            </div> -->
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                        <div class="form-group col-md-12">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"/>
                                        </div>
                                        
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                                        </div>

                                        <div class="form-group col-md-12 d-flex justify-content-between align-items-end">
                                            <a href="{{ route('register') }}" >Register Here</a>
                                            <input class="btn btn-primary col-md-3" type="submit" value="Login" />
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