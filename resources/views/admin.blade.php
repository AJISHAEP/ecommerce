<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href={{asset('css/new.css')}}>

	</head>
	<body class="img js-fullheight" style="background-image: url({{asset('img/bgg.webp')}});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center" >
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4" style="backdrop-filter: blur(7px)"  >
					<div class="login-wrap p-0">
                        @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
		      	<h3 class="mb-4 text-center"></h3>
		      	<form action= {{route('admin.do.login')}} method="POST" >
                    @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<div class="form-check">

                            <input type="checkbox" class="form-check-input" value="1" id="checkbox-1" name="remember_me">

                            <label class="form-check-label keep-text" for="checkbox-1">Remember me</label>

                          </div>
								{{-- <div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div> --}}
	            </div>
	          </form>

		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src={{asset('js/jquery.min.js')}}></script>
  <script src="{{asset('js/popper.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

	{{-- </body><form action="{{route('signin.post')}}" method="POST" class="ms-auto me-auto mt-3"style="width: 500px"> --}}
</html>

