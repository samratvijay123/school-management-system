
@extends('student.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    
<div class="col-sm-6">
<h1>my class and subject</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('student.index')}}">Home</a></li>
<li class="breadcrumb-item active">my class and subject</li>
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

</div>

<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Subject name</th>
<th>theory/pratical</th>
<th>teacher name</th>



</tr>
</thead>
<tbody>

    @foreach($my_subject as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->subject->name}}</td>
<td>{{$item->subject->type}}</td>
<td>{{$item->teacher->name}}</td>


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
