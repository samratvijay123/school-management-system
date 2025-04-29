@extends('./website/masterview')

     <!-- Navbar include (reuse the same header/navigation bar across pages) -->
    
     @section('content')


    <div class="m-3">
    
      <div class="table-responsive py-3 mx-3">
      <table class="table table-striped ">
        <div class="row">
          <tbody class=""> 
            <td class="text-center mb-4 hover-effect">
            <!-- Item 1: Grocery -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/saffola.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">Saffola Gold Refined <br> (Mix Tel)  (1 L)</div>
                  <span class="product-price">₹153</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 2: Mobile -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/oleev.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">Oleev Smart Blended Oil <br>Pouch (Mix Tel)  (1 L)</div>
                  <span class="product-price">₹137</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 3: Fashion -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/fortune.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">FORTUNE Besan <br> (0.5 kg)</div>
                  <span class="product-price">₹54</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 4: Shoes -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/aashirvaad.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div  class="">AASHIRVAAD Chakki Atta<br> (Akha Ghauno Lot)(10 kg) </div>
                  <span class="product-price">₹434</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 5: Electronic -->
            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/garam_masala.png" alt="Realme Smartphone" class="img-fluid" >
                <div class="product-info">
                  <div  class="">Catch Garam Masala <br> (Garam Masalo)(100 g)</div>
                  <span class="product-price">₹67</span>
                </div>
              </div>
            </a>
          </td>
            <td class="text-center mb-4 hover-effect">

            <!-- Item 6: Cap -->

            <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
              <div class="imga">
                <img src="uploads/webimage/sabji_masala.png" alt="Realme Smartphone" class="img-fluid">
                <div class="product-info">
                  <div class="">EVEREST Sabji Masala Powder <br> (Shak masala)  (50 g)</div>
                  <span class="product-price">₹34</span>
                </div>
              </div>
            </a>
          </td>
               </tbody>
        </div>
      </table>
    </div>
    <div class="table-responsive py-3 mx-3">
        <table class="table table-striped ">
          <div class="row">
            <tbody class=""> 
              <td class="text-center mb-4 hover-effect">
              <!-- Item 1: Grocery -->
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/pouva.png" alt="Realme Smartphone" class="img-fluid">
                  <div class="product-info">
                    <div class="">FORTUNE Indori Thick <br> Poha (Pouva)  (0.5 kg)</div>
                    <span class="product-price">₹36</span>
                  </div>
                </div>
              </a>
            </td>
              <td class="text-center mb-4 hover-effect">
  
              <!-- Item 2: Mobile -->
  
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/kohinoor_rice.png" alt="Realme Smartphone" class="img-fluid">
                  <div class="product-info">
                    <div  class="">KOHINOOR Charminar Rozana <br> Basmati Rice(Medium Grain)  (1 kg)</div>
                    <span class="product-price">₹137</span>
                  </div>
                </div>
              </a>
            </td>
              <td class="text-center mb-4 hover-effect">
  
              <!-- Item 3: Fashion -->
  
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/kalbavi_popular_cashews.png" alt="Realme Smartphone" class="img-fluid">
                  <div class="product-info">
                    <div  class="">Kalbavi Popular W45<br>Cashews (Kaju)  (500 g)</div>
                    <span class="product-price">₹444</span>
                  </div>
                </div>
              </a>
            </td>
              <td class="text-center mb-4 hover-effect">
  
              <!-- Item 4: Shoes -->
  
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/aashirvaad.png" alt="Realme Smartphone" class="img-fluid">
                  <div class="product-info">
                    <div  class="">AASHIRVAAD Chakki Atta<br> (Akha Ghauno Lot)(10 kg) </div>
                    <span class="product-price">₹434</span>
                  </div>
                </div>
              </a>
            </td>
              <td class="text-center mb-4 hover-effect">
  
              <!-- Item 5: Electronic -->
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/nutraj_california_akhrot.png" alt="Realme Smartphone" class="img-fluid" >
                  <div class="product-info">
                    <div  class="">Nutraj California Inshell <br> Walnuts (Akhrot)  (1 kg)</div>
                    <span class="product-price">₹385</span>
                  </div>
                </div>
              </a>
            </td>
              <td class="text-center mb-4 hover-effect">
  
              <!-- Item 6: Cap -->
  
              <a href="{{url('allproduct')}}" class="text-dark nav nav-link">
                <div class="imga">
                  <img src="uploads/webimage/farmley_almonds.png" alt="Realme Smartphone" class="img-fluid">
                  <div class="product-info">
                    <div class="">Farmley California <br> Almonds (Badam)(500 g)</div>
                    <span class="product-price">₹390</span>
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
