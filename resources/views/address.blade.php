<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/vendor.css')}}">

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
    <!-- Account page navigation-->
    {{-- <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
    </nav> --}}
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <!-- Profile picture card -->
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image -->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block -->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button -->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>

            <!-- Account details card -->
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Address Details</div>
                    <div class="card-body">
                        @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif


                            <!-- Form Group (username, first name, last name, email, phone) -->
                            {{-- <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <!-- Form Group (first name) -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name" value="{{Auth::user()->fname}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Form Group (last name) -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" type="text" name="lname" placeholder="Enter your last name" value="{{Auth::user()->lname}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Form Group (last name) -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputLastName">Email</label>
                                        <input class="form-control" id="inputLastName" type="email" name="email" placeholder="Enter your last name" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Form Group (last name) -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputLastName">Phone</label>
                                        <input class="form-control" id="inputLastName" type="number" name="phone" placeholder="Enter your last name" value="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                                <!-- Add other account details fields here -->
                            </div>
                            <!-- Save changes button for account details -->
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Left-aligned Update button -->
                                <button class="btn btn-primary" type="submit">Update</button>
                                <div>
                                    <a href="{{ route('address') }}" class="btn btn-primary">Add Address</a>
                                </div>
                                <!-- Right-aligned Add Address button -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


                    <!-- Address details card -->
                    {{-- <form action={{route('address.update')}} method="POST"> --}}


                        <div class="card-body">
                            <form action="{{ route('address.update') }}" method="POST">
                                @csrf
                                <!-- Form Group (house name, street, city, state, pin) -->
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <!-- Form Group (house name) -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputOrgName">House Name </label>
                                            <input class="form-control" id="inputOrgName" type="text" name="address1" placeholder="Enter your house name"required minlength="1" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (street) -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputLocation">Street</label>
                                            <input class="form-control" id="inputLocation" type="text" name="address2" placeholder="Enter your street"required minlength="1" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (street) -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputLocation">City</label>
                                            <input class="form-control" id="inputLocation" type="text" name="city" placeholder="Enter your street"required minlength="1" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (street) -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputLocation">State</label>
                                            <input class="form-control" id="inputLocation" type="text" name="state" placeholder="Enter your street"required minlength="1" maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Form Group (street) -->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputLocation">Pin</label>
                                            <input class="form-control" id="inputLocation" type="text" name="pin" placeholder="Enter your street"required minlength="1" maxlength="20">
                                        </div>
                                    </div>

                                    <!-- Add other address details fields here -->
                                </div>
                                <!-- Save changes button for address details -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary" type="submit">Add </button>

                                    <a href="{{ route('add') }}" class="btn btn-primary">Address List</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                            <!-- Form Group (birthday)-->

                        </div>
                        <!-- Save changes button-->


                            <!-- Right-aligned Add Address button -->

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {

        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        } // Adjust the duration here (in milliseconds)
    }, 3000); // 3000 milliseconds (3 seconds)

</script>
</body>
