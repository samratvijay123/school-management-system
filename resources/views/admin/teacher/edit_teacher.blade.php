
@extends('admin.masterview')
                @section('content')

                <div class="content-wrapper">

                <section class="content-header">
                <div class="container-fluid">

                <div class="row mb-2">

                <div class="col-sm-6">
                <h1>Teachar  </h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">update teacher</li>
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
                <h3 class="card-title">update teacher</h3>
                </div>

                <form action="{{route('teacher.update',$teacher->id)}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name">Teacher Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name"  value="{{old('name',$teacher->name)}}">
                                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="father_name">Father's Name</label>
                                <input type="text" name="father_name" class="form-control" placeholder="Enter father name" value="{{old('name',$teacher->father_name)}}">
                                @error('father_name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="mother_name">Mother's Name</label>
                                <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name" value="{{old('name',$teacher->mother_name)}}">
                                @error('mother_name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" value="{{old('name',$teacher->dob)}}">
                                @error('dob') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="mobno">Mobile Number</label>
                                <input type="text" name="mobno" class="form-control" placeholder="Enter number" value="{{old('name',$teacher->mobno)}}">
                                @error('mobno') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{old('name',$teacher->email)}}">
                                @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>

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


