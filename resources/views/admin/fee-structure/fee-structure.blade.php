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
                        <li class="breadcrumb-item active">fee structure</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content p-3"> <!-- Added padding -->
        <div class="container-fluid">
            <div class="row">
                
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
                            <h3 class="card-title">Fee Structure</h3>
                        </div>

                        <form action="{{route('fee-structure.store')}}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-row"> <!-- Changed to form-row for better spacing -->
                                    <div class="form-group col-md-6">
                                        <label for="class_id">Select Class</label>
                                        <select name="class_id" class="form-control" required>
                                            <option value="">Select class</option>
                                            @foreach( $classes as $class )
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('class_id')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="academic_year_id">Select Academic Year</label>
                                        <select name="academic_year_id" class="form-control" required>
                                            <option value="">Select academic year</option>
                                            @foreach( $academic_year as $cl )
                                                <option value="{{ $cl->id }}">{{ $cl->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('academic_year_id')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="fee_head_id">Select Fee Head</label>
                                        <select name="fee_head_id" class="form-control" required>
                                            <option value="">Select fee-head</option>
                                            @foreach( $feehead as $c )
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('fee_head_id')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-3 mb-3">
                                        <label>April</label>
                                        <input type="number" name="april" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>May</label>
                                        <input type="number" name="may" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>June</label>
                                        <input type="number" name="june" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>July</label>
                                        <input type="number" name="july" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>August</label>
                                        <input type="number" name="august" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>September</label>
                                        <input type="number" name="september" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>October</label>
                                        <input type="number" name="october" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>November</label>
                                        <input type="number" name="november" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>December</label>
                                        <input type="number" name="december" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>January</label>
                                        <input type="number" name="january" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>February</label>
                                        <input type="number" name="february" class="form-control" placeholder="Amount">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>March</label>
                                        <input type="number" name="march" class="form-control" placeholder="Amount">
                                    </div>
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
    </section>
</div>

@endsection