@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Teacher</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Create Teacher</li>
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
                            <h3 class="card-title">Create Teacher</h3>
                        </div>

                        <form action="{{ route('teacher.store') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Teacher Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                        @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="father_name">Father's Name</label>
                                        <input type="text" name="father_name" class="form-control" placeholder="Enter father name" required>
                                        @error('father_name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="mother_name">Mother's Name</label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name" required>
                                        @error('mother_name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" required>
                                        @error('dob')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="mobno">Mobile Number</label>
                                        <input type="text" name="mobno" class="form-control" placeholder="Enter number" required>
                                        @error('mobno')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                        @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="password">Create Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                        @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
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