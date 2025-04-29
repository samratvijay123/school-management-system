@extends('./website/masterview')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <script>
        function alert_message() {
            alert("First, you need to log in!");
        }
    </script>
</head>
<body>
    
    @section('content')
    <div class="container-fluid my-5" style="margin-top:1vh;">
        <div class="row px-sm-4 bg-light main">
            <div class="col-lg-5 col-12 rounded-2 main2 border mt-md-2 shadow-lg">
                <div class="row">
                    <div class="col-9 p-2 d-flex">
                        <div class="main_shoes card flex-grow-1 shadow-sm rounded">
                            <a href="">
                                <img src="{{ asset('uploads/webimage/sabji_masala.png') }}" id="main" class="card-img-top" alt="Sabji Masala">
                            </a>
                        </div>
                    </div>
                    <div class="col-3 p-1 ps-2 d-block gap-2">
                        <div class="col-12 pt-2">
                            <div class="side_shoes card shadow-sm rounded">
                                <a href="">
                                    <img src="{{ asset('uploads/webimage/sabji_masala.png') }}" class="card-img-top" alt="..." onmouseover="first_first()">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 pt-2">
                            <div class="side_shoes card shadow-sm rounded">
                                <a href="">
                                    <img src="{{ asset('uploads/webimage/sabji_masala_back.png') }}" class="card-img-top" alt="..." onmouseover="first()">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 pt-2">
                            <div class="side_shoes card shadow-sm rounded">
                                <a href="">
                                    <img src="{{ asset('uploads/webimage/sabji-masala-powder-box.png') }}" class="card-img-top" alt="..." onmouseover="second()">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 pt-2">
                            <div class="side_shoes card shadow-sm rounded">
                                <a href="">
                                    <img src="{{ asset('uploads/webimage/sabji-masala-powder-ingredient.png') }}" class="card-img-top" alt="..." onmouseover="third()">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7 rounded-2 border mt-2 p-3 shadow-lg">
                <div class="col-12 ps-2">
                    <p class="text-secondary">
                        EVEREST Sabji Masala Powder (Shak masala) (50 g) <br>
                        <b class="border border-success w-25 ms-3 table rounded bg-success text-light px-2" style="margin-top:-5vh; z-index:11;">
                            4.5k
                            <i class="fa-solid fa-star text-warning ps-1"></i>
                        </b>
                    </p>
                    <hr>
                    <p class="nav-link active fs-5">
                        <span class="fw-bold">Sabji Masala</span>
                    </p>
                    <hr>
                    <p class="d-flex">
                        <span class="price fs-3">₹200</span>&nbsp;&nbsp;
                        <s class="text-secondary mt-2">₹250</s>&nbsp;&nbsp;
                        <span class="text-success mt-2">20% off</span>
                    </p>
                    <hr>
                    <h5 class="text-secondary">Description</h5>
                    <p>
                        <span class="fw-bold">It is used for cooked sabji.</span>
                    </p>
                    <hr>
                    <form method="post" action="">
                        <div class="mb-2">
                            <label>Size</label>
                            <div class="d-flex gap-2">
                                <input type="radio" class="btn-check" name="size" id="size1" value="10g" autocomplete="off">
                                <label class="btn btn-light btn-outline-secondary" for="size1">10g</label>
                                <input type="radio" class="btn-check" name="size" id="size2" value="20g" autocomplete="off">
                                <label class="btn btn-light btn-outline-secondary" for="size2">20g</label>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex gap-2">
                            <a href="{{ url('/conform_buy') }}" class="btn btn-sm text-light btn-warning w-50 p-md-3 p-sm-2 fs-lg-5 fs-6">Buy</a>
                            <a href="{{ url('/cart') }}" class="btn btn-sm text-light btn-danger w-50 p-md-3 p-sm-2 fs-lg-5 fs-6">Add to Cart</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row px-sm-4 bg-light main">
            <h4 class="text-primary">Rating & Review</h4>
            <!-- Rating Section -->
            <div class="col-md-5 col-12 rounded border mt-md-2 shadow-lg p-3 main2">
                <div class="row">
                    <div class="col-4 ">
                        <p class="position-relative ps-2">
                            <b class="fs-3 position-absolute" style="top: 0; left: 0;">
                                2.3<i class="fas fa-star ps-1"></i>
                            </b>
                            <br>
                            <br>
                            <b class="text-secondary ">
                                9 Rating &amp; <br> 2 Reviews
                            </b>
                        </p>
                    </div>
                    <div class="col-8">
                        <div>
                            <b>5 <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i></b>
                            <span class="ps-2">1</span><br>
                            <b>4 <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-secondary"></i></b>
                            <span class="ps-2">1</span><br>
                            <b>3 <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i></b>
                            <span class="ps-2">0</span><br>
                            <b>2 <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i></b>
                            <span class="ps-2">0</span><br>
                            <b>1 <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i> <i class="fas fa-star text-secondary"></i></b>
                            <span class="ps-2">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="col-sm-12 col-md-7 rounded border mt-2 p-3 shadow-lg overflow-auto" style="height: 20vh;">
                <div class="mb-3">
                    <p class="fw-bold text-secondary d-flex align-items-center">
                        <img class="img-fluid rounded-circle review_image me-2" src="profile_images/me.jpg" alt="Mahboob Alam">
                        Mahboob Alam
                    </p>
                    <p>this is a very good product</p>
                    <hr>
                </div>

                <div>
                    <p class="fw-bold text-secondary d-flex align-items-center">
                        <img class="img-fluid rounded-circle review_image me-2" src="profile_images/defult.webp" alt="Md Asraf Ali">
                        Md Asraf Ali
                    </p>
                    <p>Good</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>


    @endsection
</body>
</html>
