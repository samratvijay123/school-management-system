@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fee Structure</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Fee Structure List</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
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
                            <h3 class="card-title">Filter Fee Structure</h3>
                        </div>

                        <form action="" method="GET" class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Select Class</label>
                                        <select name="class_id" class="form-control">
                                            <option value="">Select class</option>
                                            @foreach($classes as $class)
                                                <option value="{{ $class->id }}" {{ $class->id == request('class_id') ? 'selected' : '' }}>
                                                    {{ $class->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('class_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Select Academic Year</label>
                                        <select name="academic_year_id" class="form-control">
                                            <option value="">Select academic year</option>
                                            @foreach($academic_year as $year)
                                                <option value="{{ $year->id }}" {{ $year->id == request('academic_year_id') ? 'selected' : '' }}>
                                                    {{ $year->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('academic_year_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 align-self-end">
                                        <button class="btn btn-primary" type="submit">Filter</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Fee Structure List</h3>
                            <div class="card-tools">
                                <a href="{{ route('fee-structure.create') }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-plus"></i> Add New
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Academic Year</th>
                                            <th>Class</th>
                                            <th>Fee Head</th>
                                            <th>April</th>
                                            <th>May</th>
                                            <th>June</th>
                                            <th>July</th>
                                            <th>August</th>
                                            <th>September</th>
                                            <th>October</th>
                                            <th>November</th>
                                            <th>December</th>
                                            <th>January</th>
                                            <th>February</th>
                                            <th>March</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($feestructure as $fee)
                                        <tr>
                                            <td>{{ $fee->id }}</td>
                                            <td>
                                                @foreach($academic_year as $ac)
                                                    @if($ac->id == $fee->academic_year_id)
                                                        {{ $ac->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($classes as $class)
                                                    @if($class->id == $fee->class_id)
                                                        {{ $class->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($feehead as $head)
                                                    @if($head->id == $fee->fee_head_id)
                                                        {{ $head->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $fee->april }}</td>
                                            <td>{{ $fee->may }}</td>
                                            <td>{{ $fee->june }}</td>
                                            <td>{{ $fee->july }}</td>
                                            <td>{{ $fee->august }}</td>
                                            <td>{{ $fee->september }}</td>
                                            <td>{{ $fee->october }}</td>
                                            <td>{{ $fee->november }}</td>
                                            <td>{{ $fee->december }}</td>
                                            <td>{{ $fee->january }}</td>
                                            <td>{{ $fee->february }}</td>
                                            <td>{{ $fee->march }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('fee-structure.edit', $fee->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('fee-structure.delete', $fee->id) }}" onclick="return confirm('Are you sure you want to delete this?');">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
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