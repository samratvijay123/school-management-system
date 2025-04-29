@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Create Student</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content p-3">
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
                            <h3 class="card-title">Create Student</h3>
                        </div>

                        <form action="{{route('student.store')}}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="class_id">Select Class</label>
                                        <select name="class_id" class="form-control" required>
                                            <option value="">Select class</option>
                                            @foreach($classes as $class)
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
                                            @foreach($academic_year as $cl)
                                                <option value="{{ $cl->id }}">{{ $cl->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('academic_year_id')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="admission_date">Admission Date</label>
                                        <input type="date" name="admission_date" class="form-control" required>
                                        @error('admission_date')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="form-group col-md-4">
                                        <label>Student Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
                                        @error('name')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Father's Name</label>
                                        <input type="text" name="father_name" class="form-control" placeholder="Enter father name" required>
                                        @error('father_name')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Mother's Name</label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name" required>
                                        @error('mother_name')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" required>
                                        @error('dob')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Mobile Number</label>
                                        <input type="text" name="mobno" class="form-control" placeholder="Enter number" required>
                                        @error('mobno')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                                        @error('email')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label>Create Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                        @error('password')
                                        <div class="invalid-feedback d-block">{{$message}}</div>
                                        @enderror
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