{{-- @extends('layout')
@section('title','signup')
@section('content') --}}
<!doctype html>
<html lang="en">
  <head>
  	<title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href={{asset('css/users.css')}}>

	</head>
	<body class="img js-fullheight" style="background-image: url({{asset('img/bgg.webp')}}); padding-top:40px">
	{{-- <section class="ftco-section"> --}}
<div class="container">
    <div class="justify-content-right">
<form action="{{route('signup.post')}}" method="POST" class="ms-auto me-auto mt-3"style="width: 500px">
@csrf
  <div class="mb-3"  style="margin-top :3px">
  <label class="form-label">First name</label>
    <input type="First name" class="form-control" name="fname" placeholder="Enter first name">
</div>
<div class="mb-3">
    <label class="form-label">Last name</label>
    <input type="Last name" class="form-control" name="lname" placeholder="Enter last name">
</div>
<div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="Email" class="form-control" name="email" placeholder="Enter email address">
</div>
<div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
</div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password">
  </div>
  <div class="mb-3">
  <label class="form-label">Confirm password</label>
    <input type="Confirm password" class="form-control" name="cpassword" placeholder="Confirm password">
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
</div>
</div>
{{-- </section> --}}
<script src={{asset('js/jquery.min.js')}}></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

	</body>
</html>
{{-- @endsection --}}
