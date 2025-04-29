<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Bootstrap JavaScript bundle (with Popper) -->
    <script src="{{URL::to('/')}}/bootstrap_file/bootstrap.bundle.min.js"></script>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/bootstrap_file/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js" 
        integrity="sha512-FQhYy81HuzbT39wBG8y9yrU/7KMBT6IxfsPE6f5WUpDQygNpNODONEIEq4GXJNnoC+aiVKB/y98E+8EREOb/FA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>masterview</title>
    <style>
    
        /* grocery */
        .hover-effect img {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .hover-effect img:hover {
        transform: scale(1.05);
        opacity: 0.8;
    }
    /* .imga{
        height: 40%;
    } */
    .imga {
  text-align: center;
}

.imga img {
  height:25vh;
  max-width: 100%;
}

.product-info {
  margin-top: 0.5rem;
}


.product-price {
  display: block;
  margin: 0;
}

.product-price {
  font-weight: bold;
  color: #2C3E50;
}
  /* ahatak grocery k ho  k */

  
         #loginforget {
            background-color: white;
            margin-top: 8vh;
            border: 2px solid black;
            width: 40vw;
            margin-left: 25vw;
            padding: 12px; 
        }
            /* from here all css are all  products */
            .review_image {
            height: 50px;
            width: 50px;
            object-fit: cover;
        }
        .main {
            background-color: #f8f9fa;
        }
        .main2 {
            background-color: #ffffff;
        }

        :root {
            --background-color: #7c4dff;
            --footer-backgroundcolor: rgb(33, 37, 72, 1);
        }
        .home_image {
            height: 20vh;
            width: 100%;
        }
        @media screen and (min-width: 770px) {
            .main_shoes a img {
                height: 65vh;
            }
            .side_shoes img {
                height: 15vh;
            }
            .review_image {
                width: 3vw;
                height: 5vh;
            }
        }
        @media screen and (max-width: 770px) {
            .main_shoes img {
                height: 45vh;
            }
            .side_shoes img {
                height: 10vh;
            }
            .review_image {
                width: 8vw;
                height: 5vh;
            }
        }
        .carousel-inner img {
            height: 25vh;
            width: 100%;
        }
        .carousel-inner {
            padding: 1em;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            transform: translateY(500%);
        }
        .carousel-control-prev {
            margin-left: -1.5%;
        }
        .carousel-control-next {
            margin-right: -1.5%;
        }
        .formate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Brand name or logo with increased font size and left margin -->
            <a class="navbar-brand fw-bold ms-3 fs-3" href="{{url('home')}}">Shoppy</a>
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links and form -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Removed middle links -->
                </ul>
                <!-- Centered Search, Login, Add to Cart, and Become a Seller buttons -->
                <div class="d-flex mx-auto w-50">
                    <div class="input-group">
                        <input class="form-control fw-bolder font-monospace " type="search" placeholder="Search for products, brands, and more" aria-label="Search">
                        {{-- <span class="input-group-text">
                            <img src="uploads/webimage/search.png"  alt="" height="25px" width="25px">
                        </span> --}}
                    </div>
                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-secondary  fw-bolder me-2" href="#">
                        <img src="uploads/webimage/profile.png" alt="User Icon" width="30" height="30 " class="me-2">user
                    </a>
                    <a class="btn btn-outline-secondary  fw-bolder me-2" href="{{url('login')}}" role="button">
                        <img src="uploads/webimage/user.png" alt="User Icon" width="25" height="25" class="me-2">Login
                    </a>
                    <a class="btn btn-primary fw-bolder me-2" href="{{url('cart')}}" role="button">
                        <img src="uploads/webimage/shopping-cart.png" alt="" height="30px" width="30px"></i>
                        Cart
                    </a>
                    <a class="btn btn-success fw-bolder" href="#" role="button">Become a Seller</a>
                </div>
            </div>
        </div>
    </nav>


 @yield('content')


 <footer class="mt-3" style="background-color: rgba(143, 142, 152, 0.57); border: 2px solid rgba(143, 142, 152, 0.57);">
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-5 col-md-2 mb-3 border-end border-dark">
                    <h5>ABOUT</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About-Us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Cart</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Log In</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Become a seller</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Account</a></li>
                    </ul>
                </div>

                <div class="col-7 col-md-3 mb-3 ps-3">
                    <h5>Mail Us:</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Shoppy Internet Private Limited,</li>
                        <li class="nav-item mb-2">Building Shoppy, Lumbini &</li>
                        <li class="nav-item mb-2">Colve Embassy Tech Village</li>
                        <li class="nav-item mb-2">Outer Highway, Lumbini</li>
                        <li class="nav-item mb-2">Lumbini 32900</li>
                        <li class="nav-item mb-2">Lumbini, Nepal</li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-3 col-12 mb-3 text-sm-start text-center">
                    <h5>Registered Office Address</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Shoppy Internet Private Limited,</li>
                        <li class="nav-item mb-2">Building Shoppy, Lumbini &</li>
                        <li class="nav-item mb-2">Colve Embassy Tech Village</li>
                        <li class="nav-item mb-2">Outer Highway, Lumbini</li>
                        <li class="nav-item mb-2">Lumbini 32900</li>
                        <li class="nav-item mb-2">Lumbini, Nepal</li>
                        <li class="nav-item mb-2"><a class="nav-link text-dark" href="tel:+9777393936844"><i class="fas fa-phone pe-2"></i>: 73-939-368-44</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <form  method="post"  >
                        @csrf
                        <h5>Contact Us for any problems</h5>
                        <p>Your problem will be solved directly by email</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2 bg-transparent">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input type="text" name="email" class="form-control bg-transparent border-dark" placeholder="Email Address" />
                        </div>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2 my-2">
                            <label for="newsletter1" class="visually-hidden">Your Problems</label>
                            <input type="text" name="text" class="form-control bg-transparent border-dark" placeholder="Your Problems" />
                            <button class="btn btn-primary"  type="submit">Contact</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top border-dark">
                <p class="mb-0">
                    <a href="/" class="d-flex fs-2 text-primary align-items-center my-2 my-0 me-auto nav-link border-4 border-top rounded-circle border-danger">
                        <i class="fas fa-truck-fast text-danger px-1"></i> Shoppy
                    </a>
                    © 2024 Company, Inc. All rights reserved.
                </p>
                <ul class="list-unstyled d-flex fs-3 mb-0">
                    <li class="ms-3"><a class="link-body-emphasis text-success" href="https://wa.me/+977982743971"><i class="fab fa-whatsapp-square"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis text-danger" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis text-primary" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis text-primary" href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
</footer>

</body>
</html>