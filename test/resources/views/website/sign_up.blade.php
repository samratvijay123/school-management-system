@extends('./website/masterview')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign_up</title>
</head>
<body>
    @section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-10 offset-1">
                <div class="card shadow-lg border rounded">
                    <div class="card-header">
                        <h3 class="card-title text-center text-success">Welcome To Registration</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/')}}/register" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="registrationname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Full name">
                                    <span class="text-danger">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="mb-3">
                                <label for="registrationmobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="number" id="number"
                                    placeholder="Mobile" maxlength="10">
                                    <span class="text-danger">
                                        @error('number')
                                        {{$message}}
                                        @enderror
                                    </span>                            </div>
                            <div class="mb-3">
                                <label for="registrationemail" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email">
                                    <span class="text-danger">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Select Gender</label>
                                <div>
                                    <input type="radio" class="btn-check" name="gender" id="gender" value="Male" checked>
                                    <label class="btn btn-outline-secondary" for="Male">Male</label>

                                    <input type="radio" class="btn-check" name="gender" id="gender" value="Female">
                                    <label class="btn btn-outline-secondary" for="Female">Female</label>
                                    <span class="text-danger">
                                        @error('gender')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="registrationpincode" class="form-label">Pincode</label>
                                <input type="text" class="form-control" name="pincode" id="pincode"
                                    placeholder="Pincode">
                                    <span class="text-danger">
                                        @error('pincode')
                                        {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="mb-3">
                                <label for="registrationaddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address">
                                    <span class="text-danger">
                                        @error('address')
                                        {{$message}}
                                        @enderror
                                    </span>                            </div>
                            <div class="mb-3">
                                <label for="registrationpassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                                    <span class="text-danger">
                                        @error('password')
                                        {{$message}}
                                        @enderror
                                    </span>
                            </div>
                            <div class="mb-3">
                                <label for="registrationconfirm" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="registrationconfirm"
                                    placeholder="Confirm Password">
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                        {{$message}}
                                        @enderror
                                    </span>                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="signup" class="btn btn-success">Signup</button>
                                <a href="{{url('login')}}" class="btn btn-outline-secondary">Back to login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>