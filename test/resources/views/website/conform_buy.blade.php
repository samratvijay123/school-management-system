@extends('./website/masterview')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer Page</title>
    <style>
        :root {
            --background-color: #7c4dff;
            --footer-backgroundcolor: rgb(33, 37, 72, 1);
        }

        @media (max-width: 768px) and (min-width: 500px) {
            .deliver {
                font-size: 20px;
            }
        }

        @media (max-width: 500px) and (min-width: 300px) {
            .deliver {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
     <!-- Navbar include (reuse the same header/navigation bar across pages) -->
    @section('content')

    <div class="album bg-body-tertiary">
        <div class="container">
            <div class="row gap-md-4 deliver">
                <div class="col-lg-7 col-12">
                    <div class="row border rounded shadow-sm p-2 deliver">
                        <p class="fs-md-5 fw-bold text-secondary">
                            Login
                            <span><i class="fa-solid fa-check text-success"></i></span>
                            <span class="fs-md-6 fw-none float-end">User Name 1234567890</span>
                        </p>
                    </div>

                    <div class="row border rounded shadow-sm p-2 deliver">
                        <p class="fs-md-5 fw-bold text-secondary" id="delivery_address">
                            DELIVERY ADDRESS
                            <span><i class="fa-solid fa-check text-success"></i></span>
                            <button class="btn btn-outline-success float-end" onclick="change_address()">Change address</button>
                            <br>
                            <span class="fs--md-6 fw-normal deliver">User Name Address - Pincode</span>
                        </p>

                        <p class="fs-md-5 fw-bold text-secondary" style="display:none;" id="change_delivery_address">
                            DELIVERY ADDRESS
                            <span><i class="fa-solid fa-check text-success"></i></span>
                            <br>
                        </p>

                        <div class="row" id="change_address_form" style="display:none;">
                            <form action="" method="post" class="d-flex">
                                <div class="col-4">
                                    <input type="text" name="address" id="address" placeholder="Address" class="form-floating form-control py-1">
                                    <span id="address_error" class="text-danger"></span>
                                </div>&nbsp;
                                <div class="col-4">
                                    <input type="text" name="pincode" id="pincode" placeholder="Pincode" class="form-floating form-control py-1" maxlength="6">
                                    <span id="pincode_error" class="text-danger"></span>
                                </div>&nbsp;
                                <div class="col-4">
                                    <input type="submit" class="btn btn-outline-success float-end py-1" value="Save Address" name="save_address">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row border rounded shadow-sm p-2 deliver">
                        <p class="fs-md-5 fw-bold text-secondary">
                            ORDER SUMMARY
                        </p>
                        <div class="row">
                            <div class="col-3">
                                <img src="uploads/webimage/sabji_masala.png" class="img-fluid w-100" style="height:15vh;" alt="">
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-md-5 col-12 deliver">
                                        <p>
                                            <span class="d-md-none d-block">Delivery by Mon Jun 10 | <span class="text-success">Free</span><br></span>
                                            Product Name<br>
                                            <span class="text-secondary">Size: M</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 d-md-block d-none deliver">
                                        <p>Delivery by Mon Jun 10 | <span class="text-success">Free</span></p>
                                    </div>
                                    <div class="col-12 deliver">
                                        <p>
                                            <s class="text-secondary">₹1000</s>
                                            <span class="px-md-2 px-2 fs-md-5 fw-bold">₹500</span>
                                            <span class="text-success">50% Off Offer Applied</span>
                                        </p>
                                    </div>
                                    <div class="cart-product-quantity w-50">
                                        <div class="input-group quantity">
                                            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                <span class="input-group-text">-</span>
                                            </div>
                                            <input type="text" class="qty-input form-control text-center bg-light" maxlength="2" max="10" value="1" name="qty" id="qty" disabled>
                                            <div class="input-group-append increment-btn" style="cursor: pointer">
                                                <span class="input-group-text">+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border rounded shadow-sm p-2 deliver">
                        <p class="fs-md-5 fw-bold text-secondary">PAYMENT ORDER</p>
                        <p><input type="radio" name="paytem" value="cash" checked>Cash on Delivery</p>
                        <form action="{{URL::to('/Buy')}}" method="post">
                            @csrf
                            <input type="submit" value="Continue" name="continue" class="w-25 offset-2 btn btn-outline-success">
                            <a href="{{url('home')}}" class="w-25 offset-1 btn btn-outline-danger">Cancel</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-12 p-2 border rounded shadow-sm">
                    <p class="text-secondary fs-md-5 fw-bold">PRICE</p>
                    <hr>
                    <p>Price (1 item) <span class="float-end">₹500</span></p>
                    <p>Delivery Charges<span class="float-end text-success">Free</span></p>
                    <hr>
                    <p class="fw-bold fs-md-5">Total Payable<span class="float-end text-success">₹500</span></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <script>
        function change_address() {
            document.getElementById('delivery_address').style.display = "none";
            document.getElementById('change_delivery_address').style.display = "block";
            document.getElementById('change_address_form').style.display = "block";
        }
    </script>
   

    <!-- Footer include (reuse the same footer across pages) -->
    @endsection
</body>
</html>