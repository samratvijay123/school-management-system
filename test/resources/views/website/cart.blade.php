@extends('./website/masterview')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cart</title>
</head>
<body>
   <!-- Navbar include (reuse the same header/navigation bar across pages) -->
   @section('content')

   <!-- Main container for the cart page -->
   <div class="container-fluid py-5">
       <div class="container py-2">
           <!-- Table to display cart items -->
           <div class="table-responsive">
               <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">Products</th>
                       <th scope="col">Name</th>
                       <th scope="col">Price</th>
                       <th scope="col">Quantity</th>
                       <th scope="col">Total</th>
                       <th scope="col">Handle</th>
                     </tr>
                   </thead>
                   <tbody>
                       <!-- Row for iPhone 12 -->
                       <tr>
                           <th scope="row">
                               <!-- Product image -->
                               <div class="d-flex align-items-center">
                                   <img src="uploads/webimage/iphone12.png" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="iPhone 12">
                               </div>
                           </th>
                           <td>
                               <!-- Product name -->
                               <p class="mb-0 mt-4">iPhone 12</p>
                           </td>
                           <td>
                               <!-- Product price -->
                               <p class="mb-0 mt-4">₹40,999</p>
                           </td>
                           <td>
                               <!-- Quantity selector -->
                               <div class="input-group quantity mt-4" style="width: 100px;">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                           <img src="uploads/webimage/minus.png" alt="Decrease quantity" height="20vh">
                                       </button>
                                   </div>
                                   <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                           <img src="uploads/webimage/plus.png" alt="Increase quantity" height="19vh">
                                       </button>
                                   </div>
                               </div>
                           </td>
                           <td>
                               <!-- Total price for the item -->
                               <p class="mb-0 mt-4">₹2.99</p>
                           </td>
                           <td>
                               <!-- Remove item button -->
                               <button class="btn btn-md rounded-circle bg-light border mt-4">
                                   <img src="uploads/webimage/delete.png" alt="Remove item" height="16vh">
                               </button>
                           </td>
                       </tr>

                       <!-- Row for Poco M6 Pro 5G -->
                       <tr>
                           <th scope="row">
                               <!-- Product image -->
                               <div class="d-flex align-items-center">
                                   <img src="uploads/webimage/pocom6.png" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="Poco M6 Pro 5G">
                               </div>
                           </th>
                           <td>
                               <!-- Product name -->
                               <p class="mb-0 mt-4">Poco M6 Pro 5G</p>
                           </td>
                           <td>
                               <!-- Product price -->
                               <p class="mb-0 mt-4">₹17,999</p>
                           </td>
                           <td>
                               <!-- Quantity selector -->
                               <div class="input-group quantity mt-4" style="width: 100px;">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                           <img src="uploads/webimage/minus.png" alt="Decrease quantity" height="20vh">
                                       </button>
                                   </div>
                                   <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                           <img src="uploads/webimage/plus.png" alt="Increase quantity" height="19vh">
                                       </button>
                                   </div>
                               </div>
                           </td>
                           <td>
                               <!-- Total price for the item -->
                               <p class="mb-0 mt-4">₹2.99</p>
                           </td>
                           <td>
                               <!-- Remove item button -->
                               <button class="btn btn-md rounded-circle bg-light border mt-4">
                                   <img src="uploads/webimage/delete.png" alt="Remove item" height="16vh">
                               </button>
                           </td>
                       </tr>

                       <!-- Row for Dior Shirt -->
                       <tr>
                           <th scope="row">
                               <!-- Product image -->
                               <div class="d-flex align-items-center">
                                   <img src="uploads/webimage/sarfaraj.png" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="Dior Shirt">
                               </div>
                           </th>
                           <td>
                               <!-- Product name -->
                               <p class="mb-0 mt-4">Dior Shirt</p>
                           </td>
                           <td>
                               <!-- Product price -->
                               <p class="mb-0 mt-4">₹1,499</p>
                           </td>
                           <td>
                               <!-- Quantity selector -->
                               <div class="input-group quantity mt-4" style="width: 100px;">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                           <img src="uploads/webimage/minus.png" alt="Decrease quantity" height="20vh">
                                       </button>
                                   </div>
                                   <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                   <div class="input-group-btn">
                                       <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                           <img src="uploads/webimage/plus.png" alt="Increase quantity" height="19vh">
                                       </button>
                                   </div>
                               </div>
                           </td>
                           <td>
                               <!-- Total price for the item -->
                               <p class="mb-0 mt-4">₹2.99</p>
                           </td>
                           <td>
                               <!-- Remove item button -->
                               <button class="btn btn-md rounded-circle bg-light border mt-4">
                                   <img src="uploads/webimage/delete.png" alt="Remove item" height="16vh">
                               </button>
                           </td>
                       </tr>
                   </tbody>
               </table>
           </div>

           <!-- Coupon code input and apply button -->
           <div class="mt-5">
               <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
               <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
           </div>

           <!-- Cart summary and checkout section -->
           <div class="row g-4 justify-content-end">
               <div class="col-8"></div>
               <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                   <div class="bg-light rounded">
                       <div class="p-4">
                           <!-- Cart total heading -->
                           <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                           <!-- Subtotal and shipping details -->
                           <div class="d-flex justify-content-between mb-4">
                               <h5 class="mb-0 me-4">Subtotal:</h5>
                               <p class="mb-0">₹60,562</p>
                           </div>
                           <div class="d-flex justify-content-between">
                               <h5 class="mb-0 me-4">Shipping</h5>
                               <div class="">
                                   <p class="mb-0">Flat rate: ₹3.00</p>
                               </div>
                           </div>
                           <p class="mb-0 text-end">Shipping to India</p>
                       </div>
                       <!-- Total amount and checkout button -->
                       <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                           <h5 class="mb-0 ps-4 me-4">Total</h5>
                           <p class="mb-0 pe-4">₹60,559</p>
                       </div>
                       <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Proceed Checkout</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <!-- Footer include (reuse the same footer across pages) -->
    @endsection
</body>
</html>
