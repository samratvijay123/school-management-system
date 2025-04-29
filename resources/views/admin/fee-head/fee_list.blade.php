
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>List of fees</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">list of fees</li>
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

<div class="card-header">
<h3 class="card-title">list of fees </h3>
</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Fee</th>
<th>Created Time</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

    @foreach($feehead as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->created_at}}</td>
<td><a class="btn btn-primary" href="{{ route('fee-head.edit', $item->id) }}">Edit</a></td>
<td><a class="btn btn-danger"  href="{{ route('fee-head.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Delete</a></td>

</tr>
@endforeach




</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Fee</th>
<th>Created Time</th>
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