@extends('./website/masterview')

 @section('content')

    <div class="container">
        <div class="row mt-md-5" style="height: 60vh;">
            <div class="col-md-5 offset-md-3 offset-1 col-10 px-5 shadow-lg border rounded">
                <div class="container">
                    <form  action="{{url('/')}}/formm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header d-md-block d-none">
                            <h1 class="modal-title fs-3 text-success pb-4" id="staticBackdropLabel">
                                Welcome To User
                            </h1>
                        </div>
                        <div class="modal-header d-md-none d-block">
                            <p class="modal-title fw-bold text-success pb-4" id="staticBackdropLabel">
                                Welcome To Login Vkart
                            </p>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="loginmobile">Email</label>
                            <input type="email" class="form-control" name="email" id="loginmobile" placeholder="Enter Your Mobile"  />
                            <span class="text-danger">
                              @error('email')
                              {{$message}}
                              @enderror
                          </span>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="loginpassword">Password</label>
                            <input type="password" class="form-control" name="password" id="loginpassword" placeholder="Enter Your Password" />
                            <span class="text-danger">
                              @error('password')
                              {{$message}}
                              @enderror
                          </span>
                            <a href="admin_forget.php" class="text-success float-end pt-1">Forget Password?</a>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input border-2" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" name="login" class="btn-lg btn btn-outline-success">Login</button>
                            <a href="{{url('signup')}}" class="btn-lg btn btn-outline-success">Signup</a>
                               <span class="text-danger"> {{session('error')}}</span>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
