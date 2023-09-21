<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

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
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdNFNDMElrZ3mCX7JtiB7yRiwGKZsH85rvcw&usqp=CAU"
                                height="35" />
                        </a>

                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="order-lg-last col-lg-5 col-sm-12 col-8">
                        <div class="d-flex float-end ">
                            <a href="{{ route('signin') }}"
                                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center "
                                target="_blank"> <i class="fa fa-sign-in m-1 me-md-2 text"></i>
                                <p class="d-none d-md-block mb-0 text">Sign in</p>
                            </a>

                            <a href="{{ route('signup') }}"
                                class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"
                                target="_blank"> <i class="fas fa-user-alt m-1 me-md-2 text"></i>
                                <p class="d-none d-md-block mb-0 text">Sign up</p>
                            </a>
                            <!-- ... -->
                            <div class="dropdown">




                                @auth
                                    <style>
                                        .fas.fa-user {
                                            border: none;
                                            /* Remove the border */
                                            outline: none;
                                            /* Remove the outline */
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
                                                <i class="fas fa-home me-2"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href={{ route('orderlist') }}>
                                                <i class="fab fa-first-order  me-2"></i> Order
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @auth
                            <style>
                                .fas.fa-shopping-cart {
                                    border: none;
                                    /* Remove the border */
                                    outline: none;
                                    /* Remove the outline */
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

        <div class="row">


            <div class="col-md-8 mb-4">
                <div class="card mb-2 cardd">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Biling details</h5>
                    </div>
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

                    <div class="card-body">
                        <form action="{{ route('place.order') }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="account_id" value="{{encrypt($account->id)}}"> --}}
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form7Example1">First name</label>
                                        <input type="text" id="fname" name="fname"class="form-control" value="{{Auth::user()->fname}}" required/>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form7Example2">Last name</label>
                                        <input type="text" id="lname" name="lname"class="form-control"value="{{Auth::user()->lname}}"required />

                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form7Example3">House Name</label>
                                        <input type="text" id="address1" name="address1"class="form-control"value="{{$address->address1}}"required />
                                    </div>
                                </div>

                                <!-- Text input -->
                                <div class="col">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form7Example4">Street</label>
                                        <input type="text" id="address2" name="address2" class="form-control"value="{{$address->address2}}"required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form7Example6">City</label>
                                <input type="text" id="city" name="city" class="form-control" value="{{$address->city}}" required/>

                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form7Example6">state</label>
                                <input type="text" id="state" name="state" class="form-control" value="{{$address->state}}"required/>

                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form7Example6">Phone</label>
                                <input type="number" id="phone" name="phone" class="form-control"value="{{Auth::user()->phone}}" required/>

                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form7Example6">Pin</label>
                                <input type="number" id="pin" name="pin" class="form-control" value="{{$address->pin}}"required/>

                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form7Example5">Email</label>
                                <input type="email" id="email" name="email" class="form-control"value="{{Auth::user()->email}}" required/>

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

                            <button type="submit" class="btn btn-danger float-end">
                                Confirm Order
                            </button>
                        </form>
                    </div>
                </div>
            </div>





            <div class="col-md-4 mb-4">
                <div class="card mb-4 cardd">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Order Details</h5>
                        <br>


                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach ($cartItems as $cartItem)
                                    @php
                                    // Calculate the subtotal for the current item
                                    $subtotal = $cartItem->products['price'] * $cartItem->quantity;
                                    $total += $subtotal; // Add subtotal to the total
                                    @endphp
                                    <tr>
                                        <td>{{ $cartItem->products['name'] }}</td>
                                        <td>{{ $cartItem->quantity }}</td>
                                        <td>${{ $cartItem->products['price'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h6>Total Price: ${{ number_format($total) }}</h6>

                </div>
            </div>

        </div>
        {{-- <h6>Total Price: ${{ number_format($total) }}</h6> --}}
        {{-- <div class="card-footer">
                             <h6>Total Price: ${{ number_format($total) }}</h6>
        <!-- ... your cart items ... -->





        <!-- <div class="order_total"></div>
                                <div class="order_total_content text-md-right">
                                 <div class="order_total_title">Order Total:</div>
                                <div class="order_total_amount">₹22000</div>
                                </div>
                                      -->


        {{-- </div> --}}

        <!-- ... your cart items ... -->


    </header>
</body>

</html>
