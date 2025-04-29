
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Teacher List</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">teacher List</li>
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





</form>



</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
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

    @foreach($teachers as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->father_name}}</td>
<td>{{$item->mother_name}}</td>
<td>{{$item->mobno}}</td>
<td>{{$item->email}}</td>
<td>{{$item->dob}}</td>

<td>{{$item->created_at}}</td>
<td><a class="btn btn-primary" href="{{ route('teacher.edit', $item->id) }}">Edit</a></td>
<td><a class="btn btn-danger"  href="{{ route('teacher.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Dele</a></td>

</tr>
@endforeach




</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Name</th>
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
