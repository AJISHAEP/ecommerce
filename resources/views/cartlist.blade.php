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
                                                <i class="fab fa-first-order me-2"></i> Order
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


             @php
                $total = 0;
            @endphp
        @foreach ($cartItems as $cartItem)
            @php
                // Calculate the subtotal for the current item
                $subtotal = $cartItem->products['price'] * $cartItem->quantity;
                $total += $subtotal; // Add subtotal to the total
            @endphp


            <div class="col-lg-10 offset-lg-1">
                <div class="cart_items">
                    <ul class="cart_list">
                        <li class="cart_item clearfix">

                            <div class="cart_item_image"><img
                                    src="{{ asset('storage/images/' . $cartItem->products['image']) }}" alt="">
                            </div>
                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                <div class="cart_item_name cart_info_col">
                                    <div class="cart_item_title">Name</div>
                                    <div class="cart_item_text">{{ $cartItem->products['name'] }}</div>
                                </div>

                                <div class="cart_item_quantity cart_info_col">
                                    <div class="cart_item_title">Quantity</div>
                                    <div class="cart_item_text">{{ $cartItem->quantity }}</div>
                                </div>
                                <div class="cart_item_price cart_info_col">
                                    <div class="cart_item_title">Price</div>
                                    <div class="cart_item_text">${{ $cartItem->products['price'] }}</div>

                                </div>
                                <div class="cart_item_action cart_info_col">
                                    <div class="cart_item_title">Action</div>
                                    <a href="{{route('delete', $cartItem->id )}}" class="btn btn-danger btnnn delete-cart-item"
                                        data-cart-item-id="cart">Delete</a>
                                </div>

                                {{-- <i class="fas fa-trash fa-animate-shake" style="color: white; padding-right: 8px;"></i>  </a> --}}
                        </li>
                    </ul>
                </div>

            </div>
        @endforeach

        <div class="card-footer">
            <h5>Total Price: ${{ number_format($total) }}</h5>
            <!-- ... your cart items ... -->






        </div>
    </div>
</div>

        <!-- ... your cart items ... -->

        <div class="d-flex justify-content-between align-items-center flex ">
            {{-- <button class="btn btn-danger btnn" type="submit">Place Order </button> --}}

            <a href="{{ route('showaddresses') }}" class="btn btn-danger btnn">Place Order</a>

        </div>
</body>

</html>
