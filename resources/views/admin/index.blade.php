@extends('admin.masterview')
@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">School Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Total Students -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>1,254</h3>
                            <p>Total Students</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('admin.index') }}" class="small-box-footer">View Students <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Total Teachers -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>48</h3>
                            <p>Teaching Staff</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <a href="{{ route('admin.index') }}" class="small-box-footer">View Teachers <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Classes -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>12</h3>
                            <p>Active Classes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <a href="{{ route('admin.index') }}" class="small-box-footer">View Classes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Fee Collection -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>85<sup style="font-size: 20px">%</sup></h3>
                            <p>Fee Collection Rate</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <a href="{{ route('admin.index') }}" class="small-box-footer">View Reports <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

          
            
                
                
            </div>
        </div>
    </section>
</div>

@endsection