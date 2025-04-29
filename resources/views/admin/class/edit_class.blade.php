
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Class </h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">Class</li>
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
<h3 class="card-title">add  class </h3>
</div>


<form action="{{route('class.update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$classs->id}}" />
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">academic year</label>
<input type="text" name="name"  value="{{old('name',$classs->name)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter academic year">
</div>
@error('name')
<p class="text-danger">{{$message}}</p>
@enderror
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">update class</button>
</div>
</form>
</div>



</section>

</div>

@endsection