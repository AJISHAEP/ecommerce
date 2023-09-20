<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/order.css')}}">

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
                    {{-- <li>
                        <a href={{ route('welcome') }}>
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <a href="{{ route('welcome') }}">
                            <i class="fas fa-user-circle me-2"></i> Home
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
  <section class="h-100 h-custom" style="background-color: #e8e8e8;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card border-top border-bottom border-3" style="border-color: #e8e8e8 !important;">
            <div class="card-body p-5">

              <h2 style="color: #dc3545;text-align: center;">Thank you for purchasing with us!</h2>

              {{-- <div class="row">
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Date</p>
                  <p>10 April 2021</p>
                </div> --}}
                {{-- <div class="col mb-3">
                  <p class="small text-muted mb-1">Order No.</p>
                  <p>012j1gvs356c</p>
                </div>
              </div>

              <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                <div class="row">
                  <div class="col-md-8 col-lg-9">
                    <p>BEATS Solo 3 Wireless Headphones</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p>£299.99</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-lg-9">
                    <p class="mb-0">Shipping</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="mb-0">£33.00</p>
                  </div>
                </div>
              </div>

              <div class="row my-4">
                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                  <p class="lead fw-bold mb-0" style="color: #f37a27;">£262.99</p>
                </div>
              </div> --}}

              {{-- <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

              <div class="row">
                <div class="col-lg-12">

                  <div class="horizontal-timeline">

                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Ordered</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Shipped</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">On the way
                        </p>
                      </li>
                      <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                        <p style="margin-right: -8px;">Delivered</p>
                      </li>
                    </ul>

                  </div>

                </div>
              </div>

              <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                  us</a></p> --}}
                  <div class="col-md-4 mb-6"style="flex: 0 0 auto; width: 102.333333%";>
                    <div class="card mb-4 cardd">
                        <div class="card-header py-6">
                            <h5 class="mb-0">Order Details</h5>
                            <br>

                            <table class="table  table-striped">
                                <tbody>
                                    <th>Tracking No</th>
                                    <th>Total Price</th>
                                    {{-- <th>Name</th> --}}
                                    {{-- @php
                                    $total = 0;
                                @endphp --}}
                            @foreach ($orders as $item)
                                {{-- @php
                                    // Calculate the subtotal for the current item
                                    $subtotal = $cartItem->products['price'] * $cartItem->quantity;
                                    $total += $subtotal; // Add subtotal to the total
                                @endphp --}}
                                    {{-- @foreach ($cartItems as $cartItem) --}}
                                        <tr>
                                            <td>{{ $item->tracking_no }}</td>
                                            <td>{{ $item->total_price }}</td>
                                            {{-- <td>
                                                <a href="" class="btn btn-danger">view</a>
                                            </td> --}}
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>
                            {{-- <h6>Total Price: ${{ number_format($total) }}</h6> --}}
                        </div>
                    </div>
                </div>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
