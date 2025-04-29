@extends('website.masterview')
@section('content')


    
    
    <form action="/reset" id="loginforget" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h1 class="modal-title fs-3 text-success" id="staticBackdropLabel">Welcome To Forget Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="mb-3">
            <label for="loginforgetmobile" class="form-label">Mobile:</label>
            <input type="text" class="form-control" name="loginforgetmobile" id="loginforgetmobile" value="{{ old('loginforgetmobile') }}">
            @error('loginforgetmobile')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="loginforgetpassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="loginforgetpassword" id="loginforgetpassword">
            @error('loginforgetpassword')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="loginforgetpasswordconfirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="loginforgetpasswordconfirm" id="loginforgetpasswordconfirm">
            @error('loginforgetpasswordconfirm')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn-lg btn btn-outline-success">Submit</button>
        </div>
    </form>


@endsection
