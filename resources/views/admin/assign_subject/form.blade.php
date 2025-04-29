
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Assign Subject</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">assign subject</li>
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
<h3 class="card-title">assign subject</h3>
</div>


<form action="{{route('assign-subject.store')}}" method="post">
    @csrf
<div class="card-body">
    <select name="class_id" class="form-control" >
       <option value="" disabled selected>select class</option>
       @foreach ($classes as $class)
       <option value="{{$class->id}}">{{$class->name}}</option>
       @endforeach
    </select>
@error('class_id')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
@foreach ($subject as $item)
    <div class="form-check">
        <input type="checkbox" name="subject_id[]" id="subject{{ $item->id }}" value="{{ $item->id }}">
        <label for="subject{{ $item->id }}">{{ $item->name }}</label>
    </div>
@endforeach
@error('subject_id')
<p class="text-danger">{{$message}}</p>
@enderror


<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>



</section>

</div>

@endsection
