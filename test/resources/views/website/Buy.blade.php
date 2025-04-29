@extends('website.masterview')
@section('content')
      <!-- Desktop View (medium and up) -->
  
@section('content')

<!-- Desktop View (medium and up) -->
<div class="container mt-5 d-none d-md-block">
    <div class="row mb-4 p-3 border rounded border-gray">
        <p class="h6 text-primary">Arriving Fri, May 24</p>
        <div class="row">
            <div class="col-2">
                <img class="rounded img-fluid" src="{{ asset('uploads/webimage/sabji_masala.png') }}" alt="Image 1">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-8">
                        <h6 class="h5 text-primary">Athletic Performance Tee</h6>
                        <p class="text-muted">Sold by: GENUS APPARELS LTD.</p>
                        <span>
                            <small class="btn btn-sm btn-light text-muted">Size: 10g</small>
                            <small class="btn btn-sm btn-light text-muted">Qty: 1</small>
                        </span>
                        <p class="text-muted">Price: ₹266</p>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <button class="btn btn-dark mb-2">Cancel Order</button>
                            <button class="btn btn-outline-secondary">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat the block for each product -->
</div>

    <!-- Mobile View Mobile View (below medium) -->
<div class="container-fluid d-md-none mt-5">
    <div class="row border rounded border-gray mb-4">
        <p class="h6 text-primary">Arriving Fri, May 24</p>
        <div class="row">
            <div class="col-4">
                <img class="img-fluid rounded" src="{{ asset('uploads/webimage/sabji_masala.png') }}" alt="Image">
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <p class="text-primary">Athletic Performance Tee</p>
                        <p class="text-muted">Sold by: GENUS APPARELS LTD.</p>
                        <span>
                            <small class="text-muted">Size: XL</small>
                            <small class="text-muted">Qty: 1</small>
                        </span>
                        <p class="text-muted">Price: ₹266</p>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <button class="btn btn-sm btn-dark mb-2">Cancel Order</button>
                            <button class="btn btn-sm btn-outline-secondary">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Repeat the block for each product -->
</div>
@endsection