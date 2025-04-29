
@extends('student.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Change Password</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('student.index')}}">Home</a></li>
<li class="breadcrumb-item active">change password</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-primary">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
        @endif

<div class="card-header">
<h3 class="card-title">update password</h3>
</div>


<form action="{{route('student.updatepassword')}}" method="">
    @csrf
<div class="card-body row">
<div class="form-group col-md-4">
<label for="exampleInputEmail1">Old password</label>
<input type="text" name="oldpassword" class="form-control" id="exampleInputEmail1" placeholder="Enter old password">
@error('oldpassword')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">New password</label>
    <input type="text" name="newpassword" class="form-control" id="exampleInputEmail1" placeholder="Enter new password">
    @error('newpassword')
    <p class="text-danger">{{$message}}</p>
    @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="exampleInputEmail1"> Confirm password</label>
        <input type="text" name="confirmpassword" class="form-control" id="exampleInputEmail1" placeholder="Enter confirm password">
        @error('confirmpassword')
        <p class="text-danger">{{$message}}</p>
        @enderror
        </div>



</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">change password</button>
</div>
</form>
</div>



</section>

</div>

@endsection
