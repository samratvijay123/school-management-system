
@extends('admin.masterview')
                @section('content')

                <div class="content-wrapper">

                <section class="content-header">
                <div class="container-fluid">
                    
                <div class="row mb-2">
                    
                <div class="col-sm-6">
                <h1>Update student </h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">update Student</li>
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
                <h3 class="card-title">create student</h3>
                </div>


                <form action="{{route('student.update',$student->id)}}" method="post">
                    @csrf
                <div class="card-body ">
                    <div class="row">
                    <div class="form-group col-md-8">
                    <label for="">Select Class</label>
                    <select name="class_id" class="form-control">
                        <option value="">Select class</option>
                        @foreach( $classes as $class )
                            <option value="{{ $class->id }}" {{$class->id == $student->class_id ? 'selected' : ''}}>{{ $class->name }}</option>
                        @endforeach
                    </select>
                    @error('class_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group col-md-8">
                    <label for="">Select AcademicYear</label>
                    <select name="academic_year_id" class="form-control">
                        <option value="">Select academic year</option>
                        @foreach( $academic_year as $cl )
                            <option value="{{ $cl->id }}" {{$cl->id == $student->academic_year_id ? 'selected' : ''}}>{{ $cl->name }}</option>
                        @endforeach
                    </select>
                    @error('academic_year_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div> 
                
                



                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Student name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name',$student->name)}}">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                  </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Student father name</label>
                <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" value="{{old('father_name',$student->father_name)}}">
                @error('father_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Student mother name</label>
                <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" value="{{old('mother_name',$student->mother_name)}}">
                @error('mother_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror 
                </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Date of birth</label>
                <input type="date" name="dob" class="form-control" id="exampleInputEmail1" value="{{old('dob',$student->dob)}}">
                @error('dob')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Mobile number</label>
                <input type="text" name="mobno" class="form-control" id="exampleInputEmail1" value="{{old('mobno',$student->mobno)}}">
                @error('mobno')
                    <p class="text-danger">{{$message}}</p>
                    @enderror 
            </div>
                
                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email',$student->email)}}">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>

                
            



            

                </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">update student</button>
                </div>
                </form>
                </div>



                </section>

                </div>

                @endsection


                