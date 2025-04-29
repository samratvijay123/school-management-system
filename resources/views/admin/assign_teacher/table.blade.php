
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Assign teacher</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">assign teacher</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">

<div class="card">
@if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

<div class="card-header ">
    <form action="" class="row">
    <div class="form-group col-md-4">
        <select name="class_id" class="form-control" >
          <option value="" disabled selected>select class</option>
          @foreach ($classes as $class )
           <option value="{{$class->id}}" {{$class->id == request('class_id') ? 'selected' : ''}}>{{$class->name}}</option>

          @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary">filter</button>
    </div>
</form>
</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Class name</th>
<th>Subject name</th>
<th>theory/pratical</th>
<th>Teacher name</th>
<th>Created Time</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

    @foreach($assign_teachers as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->class->name}}</td>
<td>{{$item->subject->name}}</td>
<td>{{$item->subject->type}}</td>
<td>{{$item->teacher->name}}</td>
<td>{{$item->created_at}}</td>
<td><a class="btn btn-primary" href="{{ route('assign-teacher.edit', $item->id) }}">Edit</a></td>
<td><a class="btn btn-danger"  href="{{ route('assign-teacher.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Delete</a></td>

</tr>
@endforeach




</tbody>


</table>
</div>

</div>



</div>

</div>

</div>

</div>

</section>

</div>


@endsection
