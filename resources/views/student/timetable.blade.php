
@extends('student.masterview')
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Timetable</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('student.index')}}">Home</a></li>
<li class="breadcrumb-item active">Timetable</li>
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
    @foreach ($timetable as $day => $details )

<div class="card-header ">
{{$day}}
</div>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>subject Name</th>
            <th>start time</th>
            <th>end time</th>
            <th>room number</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($details as $slot)
        <tr>
            <td>{{ $slot['subject'] }}</td>
            <td>{{ \Carbon\Carbon::parse($slot['start_time'])->format('h:i A') }}</td>
            <td>{{ \Carbon\Carbon::parse($slot['end_time'])->format('h:i A') }}</td>
            <td>{{ $slot['room_no'] }}</td>
        </tr>
    @endforeach



    </tbody>
    </table>

</div>
@endforeach


</div>



</div>

</div>

</div>

</div>

</section>

</div>


@endsection
