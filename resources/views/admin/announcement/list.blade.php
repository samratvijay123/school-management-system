
@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Announcement List</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
<li class="breadcrumb-item active">list of announcement</li>
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
<h3 class="card-title">list of announcement</h3>
</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Broadcast To</th>
<th>Message</th>
<th>Created Time</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

    @foreach($announcements as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->type}}</td>
<td>{{$item->message}}</td>
<td>{{$item->created_at}}</td>
<td><a class="btn btn-primary" href="{{ route('announcement.edit', $item->id) }}">Edit</a></td>
<td><a class="btn btn-danger"  href="{{ route('announcement.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Delete</a></td>

</tr>
@endforeach




</tbody>
<tfoot>
<tr>
    <th>ID</th>
    <th>Broadcast To</th>
    <th>Message</th>
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
