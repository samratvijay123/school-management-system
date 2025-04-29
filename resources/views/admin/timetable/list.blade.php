@extends('admin.masterview')
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
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
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
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <div class="card-body">

                            <form action="" class="row">
                                <div class="form-group col-md-4">
                                    <select name="class_id" id="class_id" class="form-control" >
                                      <option value="" disabled selected>select class</option>
                                      @foreach ($classes as $class )
                                       <option value="{{$class->id}}" {{$class->id == request('class_id') ? 'selected' : ''}}>{{$class->name}}</option>

                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <select name="subject_id" id="subject_id" class="form-control" >
                                      <option value="" disabled selected>select subject</option>


                                    </select>
                                </div>



                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-primary">filter</button>
                                </div>
                            </form>


                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Day</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Room no</th>

                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tabletime as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->class->name  }}</td>
                                            <td>{{ $item->subject->name  }}</td>
                                            <td>{{ $item->day->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->end_time)->format('h:i A') }}</td>
                                            <td>{{ $item->room_no }}</td>
                                            <td><a class="btn btn-danger"  href="{{ route('timetable.delete',$item->id)}}" onclick="return confirm('are you sure want to delete?');">Dele</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


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


@endsection
