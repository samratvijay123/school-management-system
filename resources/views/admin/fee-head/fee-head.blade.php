
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Add fee</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">Add fee </li>
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
<h3 class="card-title">Add fee</h3>
</div>


<form action="{{route('fee-head.store')}}" method="post">
    @csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Add fee</label>
<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter fee">
</div>
@error('name')
<p class="text-danger">{{$message}}</p>
@enderror
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">add fee</button>
</div>
</form>
</div>



</section>

</div>

@endsection