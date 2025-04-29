
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Subject</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">subject</li>
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

<div class="card-header">
<h3 class="card-title">add subject </h3>
</div>


<form action="{{route('subject.store')}}" method="post">
    @csrf
<div class="card-body">

<div class="form-group">
<label for="exampleInputEmail1">subject  name</label>
<input type="text" name="name" class="form-control"  placeholder="enter name">
@error('name')
<p class="text-danger">{{$message}}</p>
@enderror
</div>

<div class="form-group">
    <label for="exampleInputEmail1">type</label>
    <select name="type" class="form-control">
        <option value="" disabled selected>Select List</option>
        <option value="theory">theory</option>
        <option value="pratical">pratical</option>
    </select>
    @error('type')
    <p class="text-danger">{{$message}}</p>
    @enderror
    </div>



</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>



</section>

</div>

@endsection
