<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/cart.css')}}">

        <title>Cart page</title>

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
          <a href="" target="_blank" class="float-start">
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

  <div class="row">
    <div class="col-md-8 mb-4">
      <div class="card mb-2 cardd">
        <div class="card-header py-3">
          <h5 class="mb-0">Biling details</h5>
        </div>
        <div class="card-body">
          <form action="{{url('confirm-order')}}" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            {{-- <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form7Example1">First name</label>
                  <input type="text" id="form7Example1" name="fname"class="form-control" />

                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form7Example2">Last name</label>
                  <input type="text" id="form7Example2"  name="lname"class="form-control" />

                </div>
              </div>
            </div> --}}

            <!-- Text input -->
            <div class="card-body">
                <form action="{{ route('confirm.order') }}" method="POST">
                    @csrf

                    <input type="hidden" name="account_id" value="{{encrypt($accounts->id)}}">
                    <!-- Form Group (house name, street, city, state, pin) -->
                    <div class="row gx-3 mb-3">

                            <!-- Form Group (house name) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputOrgName">House Name</label>
                                <input class="form-control" id="inputOrgName" type="text" name="address1" placeholder="Enter your house name" value="{{$accounts->address1}}" >
                            </div>

                        <div class="col-md-6">
                            <!-- Form Group (street) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">Street</label>
                                <input class="form-control" id="inputLocation" type="text" name="address2" placeholder="Enter your street"value="{{$accounts->address2}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group (street) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">City</label>
                                <input class="form-control" id="inputLocation" type="text" name="city" placeholder="Enter your street"value="{{$accounts->city}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group (street) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">State</label>
                                <input class="form-control" id="inputLocation" type="text" name="state" placeholder="Enter your street"value="{{$accounts->state}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group (street) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">Pin</label>
                                <input class="form-control" id="inputLocation" type="text" name="pin" placeholder="Enter your street"value="{{$accounts->pin}}">
                            </div>
                        </div>




            <!-- Message input -->
            {{-- <div class="form-outline mb-4">
              <textarea class="form-control" id="form7Example7" rows="4"></textarea>
              <label class="form-label" for="form7Example7">Additional information</label>
            </div> --}}

            <!-- Checkbox -->
            {{-- <div class="form-check d-flex justify-content-center mb-2">
              <input class="form-check-input me-2" type="checkbox" value="" id="form7Example8" checked />
              <label class="form-check-label" for="form7Example8">
                Create an account?
              </label>
            </div> --}}
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card mb-4 cardd">
        <div class="card-header py-3">
          <h5 class="mb-0">Order Details</h5>
        <br>

        <table class="table">
            <tbody>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>

                @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->products['name'] }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>${{ $cartItem->products['price'] }}</td>
                </tr>
        @endforeach
    </tbody>
</table>
          <button type="button" class="btn btn-primary float-end">
            Confirm Order
          </button>
        </div>
      </div>
    </div>
  </div>
{{-- <div class="card-footer">
    <h6>Total Price: ${{ number_format($total) }}</h6> --}}
<!-- ... your cart items ... -->





                     <!-- <div class="order_total">
                         <div class="order_total_content text-md-right">
                             <div class="order_total_title">Order Total:</div>
                             <div class="order_total_amount">₹22000</div>
                         </div>
                     </div> -->

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ... your cart items ... -->


</div>
</body>
</html>
