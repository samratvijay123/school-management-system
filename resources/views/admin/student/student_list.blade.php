
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Student List</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">Student List</li>
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



<form action="">
<div class="row">

    <div class="col-md-4">
        <select name="academic_year_id" class="form-control" id="">
           <option value="" disabled selected>select academic year</option>
        @foreach($academic_year as $item)
            <option value="{{$item->id}}" {{$item->id == request('academic_year_id') ? 'selected' : ''}}>{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <select name="class_id" class="form-control" id="">
           <option value="" disabled selected>select classes</option>
        @foreach($classes as $ite)
            <option value="{{$ite->id}}" {{$ite->id == request('class_id') ? 'selected' : ''}}>{{$ite->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
          <input class="btn btn-primary" type="submit" value="filter" name="" id="">
    </div>

</form>



</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Academic Year</th>
<th>Class</th>
<th>father_name</th>
<th>mother_name</th>
<th>mobile_num</th>
<th>Email</th>
<th>Date_of_birth</th>
<th>created_at</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

    @foreach($students as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->studentAcademicYear->name}}</td>
<td>{{$item->studentClass->name}}</td>
<td>{{$item->father_name}}</td>
<td>{{$item->mother_name}}</td>
<td>{{$item->mobno}}</td>
<td>{{$item->email}}</td>
<td>{{$item->dob}}</td>

<td>{{$item->created_at}}</td>
<td><a class="btn btn-primary" href="{{ route('student.edit', $item->id) }}">Edit</a></td>
<td><a class="btn btn-danger"  href="{{ route('student.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Dele</a></td>

</tr>
@endforeach




</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Name</th>
<th>Academic Year</th>
<th>Class</th>
<th>father_name</th>
<th>mother_name</th>
<th>mobile_num</th>
<th>Email</th>
<th>Date_of_birth</th>
<th>created_at</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</tfoot>
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
