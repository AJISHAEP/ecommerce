<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <title>Home page</title>

</head>
<body>
<!--Main Navigation-->
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="#" target="_blank" class="float-start">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdNFNDMElrZ3mCX7JtiB7yRiwGKZsH85rvcw&usqp=CAU" height="35" />
          </a>

        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="order-lg-last col-lg-5 col-sm-12 col-8">
          <div class="d-flex float-end ">
            <a href="{{route('signin')}}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center " target="_blank"> <i class="fa fa-sign-in m-1 me-md-2 text"></i><p class="d-none d-md-block mb-0 text">Sign in</p> </a>

            <a href="{{route('signup')}}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2 text"></i><p class="d-none d-md-block mb-0 text">Sign up</p> </a>
            <!-- ... -->
            <div class="dropdown">


@auth
<style>
    .fas.fa-user {
        border: none; /* Remove the border */
        outline: none; /* Remove the outline */
    }
</style>
                <button class="fas fa-user m-1 me-2 text" style="font-size: 1.5rem;"></button>


@endauth


                <div class="dropdown-content">
                    <ul>
                    <li>
                        <a href={{ route('profile') }}>
                            <i class="fas fa-user-circle me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href={{ route('welcome') }}>
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            @auth
            <style>
    .fas.fa-shopping-cart {
        border: none; /* Remove the border */
        outline: none; /* Remove the outline */
    }
</style>
<a href="{{ route('cartlist') }}">
    <button class="fas fa-shopping-cart m-1 me-2 text" style="font-size: 1.5rem;"></button>
</a>

@endauth

<!-- ... -->


        </div>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <div class="input-group float-center">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" placeholder="search" />
            </div>
            <button type="button" class="btn btn-primary shadow-0">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Navbar -->
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white"> --}}
    <!-- Container wrapper -->
    {{-- <div class="container justify-content-center justify-content-md-between"> --}}
      <!-- Toggle button -->
      {{-- <button
              class="navbar-toggler border py-2 text-dark"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarLeftAlignExample"
              aria-controls="navbarLeftAlignExample"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button> --}}
{{--
      <!-- Collapsible wrapper -->
       <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Hot offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Gift boxes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Menu item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Menu name</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul> --}}
        <!-- Left links -->
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <!-- Jumbotron -->
  <div class="bg-primary text-white bak">
    <div class="container py-5">
      <h1>
        Best products & <br />
        brands in our store
      </h1>
      <p>
        Trendy Products, Factory Prices, Excellent Service
      </p>
      <button type="button" class="btn btn-outline-light">
        Learn more
      </button>
      <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
        <span class="pt-1">Purchase now</span>
      </button>
    </div>
  </div>
  <!-- Jumbotron -->
</header>
<!-- Products -->
<section>
    <div class="container bg-white">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container-fluid p-0"> <a class="navbar-brand text-uppercase fw-800" href="#"><span class="border-red pe-2">New</span>Product</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
                <div class="collapse navbar-collapse" id="myNav">
                    <div class="navbar-nav ms-auto">
                        @foreach ($catagories as $catagory )
                        {{-- <a class="nav-link active" aria-current="page" href="{{ route('new',['id' => encrypt($catagory->id)]) }}">Mobile</a>
                        <a class="nav-link" href="{{ route('new',['id' => encrypt($catagory->id)]) }}">fashion</a> --}}
                        <a class="nav-link" href="{{ route('new',['id' => encrypt($catagory->id)]) }}">{{$catagory->name}}</a>

                        @endforeach
                        </div>
                </div>
            </div>

        </nav>
        @if (session('message'))
   <div class="alert alert-success" id="session-message">
       {{ session('message') }}
   </div>
   <script>
       // Set a timeout to hide the message after 3 seconds (3000 milliseconds)
       setTimeout(function() {
           var sessionMessage = document.getElementById('session-message');
           if (sessionMessage) {
               sessionMessage.style.display = 'none';
           }
       }, 3000); // 3000 milliseconds = 3 seconds
   </script>
@endif

    <div class="row">
        @foreach ($products as $product)
        @if ($loop->iteration <= 12)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="{{ asset("storage/images/".$product->image) }}" alt="">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <!-- <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon">
    <a href="{{ route('cart',encrypt($product->id)) }}">
        <span class="fas fa-shopping-bag"></span>
    </a> -->

</li>

                </ul>
            </div>
            <div class="title pt-4 pb-1">{{ $product->name }}</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">${{ $product->price }}</div>

            <form action="{{ url('cart') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">
    <br>
    <button class="btn btn-outline-danger" type="submit">Add to Cart</button>
</form>

               <!-- <p class="btn-holder"><a href="{{ route('cart',encrypt($product->id)) }}" class="btn btn-outline-danger">Add to Cart</a></p> -->
        </div>
{{--
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong {{ $loop->iteration <= 12 ? 'special-styling' : '' }}">
                    <img src="{{ asset("storage/images/".$product->image) }}" class="card-img-top" style="aspect-ratio: 1 / 1" />
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            @endif
        @endforeach
    </div>


      {{-- <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/2.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
            <p class="card-text">$320.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/3.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/4.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
            <p class="card-text">$790.50</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/6.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
            <p class="card-text">$99.50</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</section>
<!-- Products -->

<!-- Feature -->

<!-- Feature -->



<!-- Footer -->
<footer class="text-center text-lg-start text-muted mt-3" style="background-color: #f5f5f5;">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start pt-4 pb-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-12 col-lg-3 col-sm-12 mb-2">
          <!-- Content -->
          <a href="https://mdbootstrap.com/" target="_blank" class="">
          </a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">About us</a></li>
            <li><a class="text-muted" href="#">Find store</a></li>
            <li><a class="text-muted" href="#">Categories</a></li>
            <li><a class="text-muted" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Money refund</a></li>
            <li><a class="text-muted" href="#">Shipping info</a></li>
            <li><a class="text-muted" href="#">Refunds</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Documents</a></li>
            <li><a class="text-muted" href="#">Account restore</a></li>
            <li><a class="text-muted" href="#">My orders</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
          <p class="text-muted">Stay in touch with latest updates about our products and offers</p>
          {{-- <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div> --}}
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <div class="">
    <div class="container">
      <div class="d-flex justify-content-between py-4 border-top">
        <!--- payment --->
        <div>
          <i class="fab fa-lg fa-cc-visa text-dark"></i>
          <i class="fab fa-lg fa-cc-amex text-dark"></i>
          <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
          <i class="fab fa-lg fa-cc-paypal text-dark"></i>
        </div>
        <!--- payment --->

        <!--- language selector --->
        {{-- <div class="dropdown dropup">
          <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div> --}}
        <!--- language selector --->
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-nw8vIQov5g/+0/4D3Bq5BvG3PpMv4lElhftSs5Bq5zK4NwkWkPcHmcsf5OtF5m5Vf6" crossorigin="anonymous"></script>
<!-- <div class="container mt-4">
    <h2 class="mb-3">Shopping cart</h2> -->


</body>

</html>
