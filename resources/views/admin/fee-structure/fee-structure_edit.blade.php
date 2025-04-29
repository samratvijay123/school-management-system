
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
                <h3 class="card-title">update fee structure</h3>
                </div>


                <form action="{{route('fee-structure.update',$feestructure->id)}}" method="post">
                    @csrf
                <div class="card-body ">
                    <div class="row">
                    <div class="form-group col-md-8">
                    <label for="">Select Class</label>
                    <select name="class_id" class="form-control">
                        <option value="">Select class</option>
                        @foreach( $classes as $class )
                        <option value="{{ $class->id }}" {{ $feestructure->class_id == $class->id ? 'selected' : '' }}>{{ $class->name }}</option>
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
                        <option value="{{ $cl->id }}" {{ $feestructure->academic_year_id == $cl->id ? 'selected' : '' }}>{{ $cl->name }}</option>
                        @endforeach
                    </select>
                    @error('academic_year_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div> 
                 <div class="form-group col-md-8">
                    <label for="">Select fee-head</label>
                    <select name="fee_head_id" class="form-control">
                        <option value="">Select fee-head</option>
                        @foreach( $feehead as $c )
                        <option value="{{ $c->id }}" {{ $feestructure->fee_head_id == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('fee_head_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>



                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">April</label>
                <input type="text" name="april" value="{{old('april',$feestructure->april)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter april  fee">
                </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">may</label>
                <input type="text" name="may" class="form-control" id="exampleInputEmail1"   value="{{old('april',$feestructure->april)}}">
                </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">june</label>
                <input type="text" name="june" class="form-control" id="exampleInputEmail1"   value="{{old('june',$feestructure->june)}}">
                </div>

                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">july</label>
                <input type="text" name="july" class="form-control" id="exampleInputEmail1"   value="{{old('july',$feestructure->july)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">august</label>
                <input type="text" name="august" class="form-control" id="exampleInputEmail1"   value="{{old('august',$feestructure->august)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">september</label>
                <input type="text" name="september" class="form-control" id="exampleInputEmail1"   value="{{old('september',$feestructure->september)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">october</label>
                <input type="text" name="october" class="form-control" id="exampleInputEmail1"  value="{{old('octoper',$feestructure->october)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">november</label>
                <input type="text" name="november" class="form-control" id="exampleInputEmail1"   value="{{old('november',$feestructure->november)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">december</label>
                <input type="text" name="december" class="form-control" id="exampleInputEmail1"   value="{{old('december',$feestructure->december)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">january</label>
                <input type="text" name="january" class="form-control" id="exampleInputEmail1"   value="{{old('january',$feestructure->january)}}">
                </div>


                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">february</label>
                <input type="text" name="february" class="form-control" id="exampleInputEmail1"   value="{{old('february',$feestructure->february)}}">
                </div>



                <div class="form-group col-md-4">
                <label for="exampleInputEmail1">march</label>
                <input type="text" name="march" class="form-control" id="exampleInputEmail1"   value="{{old('march',$feestructure->march)}}">
                </div>


                </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">update fee structure</button>
                </div>
                </form>
                </div>



                </section>

                </div>

                @endsection


                