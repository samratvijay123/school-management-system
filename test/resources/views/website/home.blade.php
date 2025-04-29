@extends('./website/masterview')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Hover effect for images */
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

    .,
    .product-price {
      display: block;
      margin: 0;
    }

    .product-price {
      font-weight: bold;
      color: #2C3E50;
    }

    </style>
    <title>Home</title>
</head>

<body>

    @section('content')
    

    <!-- Main content container -->
    <div class="container-fluid table-responsive my-2">
      <table class="table table-striped ">
          <tbody>
            
            <td class="text-center mb-4 hover-effect">
            <!-- Item 1: Grocery -->
                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Grocery.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Grocery">
                    <p class="fs-5 pt-3">Grocery</p>
                </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 2: Mobile -->

                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Mobile.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Mobile">
                    <p class="fs-5 pt-3">Mobile</p>
                </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 3: Fashion -->

                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Fashion.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Fashion">
                    <p class="fs-5 pt-3">Fashion</p>
                </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 4: Shoes -->

                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Shoes.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Shoes">
                    <p class="fs-5 pt-3">Shoes</p>
                </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 5: Electronic -->
                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Electronic.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Electronic">
                    <p class="fs-5 pt-3 ">Electronic</p>
                </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 6: Cap -->

                <a href="{{url('grocery')}}" class="nav-link">
                    <img src="uploads/webimage/Cap.png" class="bd-placeholder-img rounded-circle" style="height: 100px; width: 100px;" alt="Cap">
                    <p class="fs-5 pt-3">Cap</p>
                </a>
          </td>
               </tbody>
      </table>
    </div>

    <!-- Example card section -->
    

    <!-- Carousel section -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="uploads/webimage/scrollimg3.png" alt="" width="100%">
                <!--
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
                -->
            </div>
            <div class="carousel-item">
                <img src="uploads/webimage/scrollimg.png" alt="" width="100%">
                <!--
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
                -->
            </div>
            <div class="carousel-item active">
                <img src="uploads/webimage/scrollimg2.png" alt="" width="100%">
                <!--
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
                -->
            </div>
        </div>
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- /// --}}
    <div class="m-5">
      <h3>Best Deals On Smartphones</h3>
      <div class="table-responsive">
      <table class="table table-striped ">
        <div class="row">
          <tbody class=""> 
            <td class="text-center mb-4 hover-effect">
            <!-- Item 1: Grocery -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/realme.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">Realme P1 5G</div>
                  <span class="product-price">From ₹14,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 2: Mobile -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/iphone12.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">iPhone 12</div>
                  <span class="product-price">From ₹40,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 3: Fashion -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/pocom6.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Poco M6 Pro 5G</div>
                  <span class="product-price">From ₹17,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 4: Shoes -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/redmi12.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Redmi 12 Pro 5G </div>
                  <span class="product-price">From ₹16,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 5: Electronic -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/oneplus11.png" alt="Realme Smartphone" class="img-fluid" >
                <div class="product-info">
                  <div  class="">OnePlus 11 5G Specs </div>
                  <span class="product-price">From ₹35,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 6: Cap -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/lava.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">Lava</div>
                  <span class="product-price">From ₹19,999</span>
                </div>
              </div>
            </a>
          </td>
               </tbody>
        </div>
      </table>
    </div>
  </div>

 
  {{-- second row  --}}
    <div class="m-5">
      <h3>Top Deal on Fashion</h3>
      <div class="table-responsive">
      <table class="table table-striped ">
        <div class="row">
          <tbody class=""> 
            <td class="text-center mb-4 hover-effect">
            <!-- Item 1: Grocery -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/topshirt.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">Funky Shirt</div>
                  <span class="product-price">From ₹999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 2: Mobile -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/sarfaraj.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Dior Shirt</div>
                  <span class="product-price">From ₹1,499</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 3: Fashion -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/sarfaraj2.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Gucci Glass</div>
                  <span class="product-price">From ₹1,899</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 4: Shoes -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/puma.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Puma Shoe </div>
                  <span class="product-price">From ₹11,999</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 5: Electronic -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/kotty.png" alt="Realme Smartphone" class="img-fluid" >
                <div class="product-info">
                  <div  class="">KOTTY </div>
                  <span class="product-price">From ₹447</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 6: Cap -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/aayu.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">AAYU</div>
                  <span class="product-price">From ₹999</span>
                </div>
              </div>
            </a>
          </td>
               </tbody>
        </div>
      </table>
    </div>
  </div>
    <!-- Footer include (reuse the same footer across pages) -->
    @endsection
</body>

</html>
