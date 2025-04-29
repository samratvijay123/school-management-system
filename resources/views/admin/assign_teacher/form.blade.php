
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

<div class="col-md-6">

<div class="card card-primary">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

<div class="card-header">
<h3 class="card-title">assign teacher</h3>
</div>


<form action="{{route('assign-teacher.store')}}" method="post">
    @csrf
<div class="card-body">
    <div class="form-group">

    <select name="class_id" id="class_id" class="form-control" >
       <option value="" disabled selected>select class</option>
       @foreach ($classes as $class)
       <option value="{{$class->id}}">{{$class->name}}</option>
       @endforeach
    </select>
@error('class_id')
<p class="text-danger">{{$message}}</p>
@enderror
</div>


<div class="form-group">
    <select name="subject_id" id="subject_id" class="form-control" >
        <option disabled selected>select subject</option>
    </select>
    @error('subject_id')
<p class="text-danger">{{$message}}</p>
@enderror
</div>

{{--
<div class="form-group">
    <select name="subject_id"  class="form-control" >
       <option value="" disabled selected>select class</option>
       @foreach ($subjects as $sub)
       <option value="{{$sub->id}}">{{$sub->name}}</option>
       @endforeach
    </select>
@error('teacher_id')
<p class="text-danger">{{$message}}</p>
@enderror
</div> --}}


<div class="form-group">
    <select name="teacher_id"  class="form-control" >
       <option value="" disabled selected>select class</option>
       @foreach ($teachers as $teacher)
       <option value="{{$teacher->id}}">{{$teacher->name}}</option>
       @endforeach
    </select>
@error('teacher_id')
<p class="text-danger">{{$message}}</p>
@enderror
</div>


</div>



<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>



</section>
</div>
@endsection

@section('customJs')
<script>
$(document).ready(function() {
    $('#class_id').change(function() {
        var class_id = $(this).val();
        $.ajax({
            url: "{{ route('findSubject') }}",
            type: "GET",
            data: { class_id: class_id },
            dataType: 'json',
            success: function(response) {
                $('#subject_id').find('option').not(":first").remove();
                $.each(response.subjects, function(key, item) {
                    $('#subject_id').append(
                        $('<option>', {
                            value: item.subject_id,
                            text: item.subject.name
                        })
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>
@endsection
