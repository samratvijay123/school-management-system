@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Time Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Time Table</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="card-header">
                            <h3 class="card-title">Time Table</h3>
                        </div>

                        <form action="{{ route('timetable.store') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="class_id">Class</label>
                                        <select name="class_id" id="class_id" class="form-control" required>
                                            <option value="" disabled selected>Select class</option>
                                            @foreach ($classes as $cl)
                                                <option value="{{ $cl->id }}" {{ old('class_id') == $cl->id ? 'selected' : '' }}>
                                                    {{ $cl->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('class_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="subject_id">Subject</label>
                                        <select name="subject_id" id="subject_id" class="form-control" required>
                                            <option value="" disabled selected>Select subject</option>
                                            @if(old('subject_id'))
                                                @foreach ($subjects as $sub)
                                                    <option value="{{ $sub->id }}" {{ old('subject_id') == $sub->id ? 'selected' : '' }}>
                                                        {{ $sub->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('subject_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Day</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Room Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($days as $index => $day)
                                                <tr>
                                                    <td>{{ $day->name }}</td>
                                                    <input type="hidden" name="timetable[{{ $index }}][day_id]" value="{{ $day->id }}">
                                                    <td>
                                                        <input type="time" name="timetable[{{ $index }}][start_time]"
                                                               value="{{ old('timetable.'.$index.'.start_time') }}" 
                                                               class="form-control" required>
                                                    </td>
                                                    <td>
                                                        <input type="time" name="timetable[{{ $index }}][end_time]"
                                                               value="{{ old('timetable.'.$index.'.end_time') }}" 
                                                               class="form-control" required>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="timetable[{{ $index }}][room_no]"
                                                               value="{{ old('timetable.'.$index.'.room_no') }}"
                                                               placeholder="Room no" class="form-control" required>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary ml-2">Reset</button>
                            </div>
                        </form>
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