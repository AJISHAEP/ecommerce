<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <button class="fas fa-user m-1 me-md-2 text" style="font-size: 1.5rem;"></button>
                <div class="dropdown-content">
                    <ul>
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class="fas fa-user-circle me-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="#">
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

  <div class="container-xl px-4 mt-4">
    <h3>Select An Address</h3>


        <form method="POST" action="{{ route('place.order') }}">
            @csrf
            @foreach ($addresses as $account)
            <div class="address-list address-listt">
                <div class="address-item">
                    <div class="address-header">

                        <h3>{{ $account->address1 }} </h3>
                    </div>

                    <p>{{ $account->address1 }},{{ $account->address2 }}, {{ $account->city }}, {{ $account->state }}, {{ $account->pin }}</p>

                    <!-- Add a radio button to select this address -->

                        {{-- <input type="radio" class="form-check-input" id="address{{ $account->id }}" name="selectedAddress" value="{{ $account->id }}"> --}}

                        <button type="submit" class="btn btn-danger btnn">Deliver Here</button>
                    </div>
                </div>
            @endforeach

            <!-- Submit button to place the order -->

        </form>
    </div>
</div>


</div>
</div>
