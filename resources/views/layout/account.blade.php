@extends('layout.masters')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <section style="padding: 40px">

    <form action="{{route('account.post')}}" method="POST">
        @csrf


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="name" class="form-control" name="name" id="inputName4" placeholder="Name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email"id="inputEmail4" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Adress">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" name="state"class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Pin</label>
            <input type="text" name="pin"class="form-control" id="inputZip">
          </div>
        </div>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto float-right">
                <a href={{route('addaddress')}} class="btn btn-primary" href="">Add
                Address</a>

            </ul>
        </div>
      </form>

    </section>
</body>
</html>
@endsection
