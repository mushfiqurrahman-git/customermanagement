<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Customer Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/customer')}}">Customer</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
      <form action="{{url('/')}}/customer" method="post">
          @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                Customer Registration
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name : </label>
                    <input type="text" name="name" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('name')
                        {{message}}
                        @enderror
</span>
</div>
<div class="form-group col-md-6 required">
                    <label for="">Email : </label>
                    <input type="text" name="email" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('email')
                        {{message}}
                        @enderror
</span>
</div>
<div class="form-group col-md-6 required">
                    <label for="">Password  : </label>
                    <input type="password" name="password" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('password')
                        {{message}}
                        @enderror
</span>
</div>
<div class="form-group col-md-6 required">
                    <label for="">Confirm Password : </label>
                    <input type="password" name="password_confirmation" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('password_confirmation')
                        {{message}}
                        @enderror
</span>

</div>
<div class="form-group col-md-6 required">
                    <label for="">Country : </label>
                    <input type="text" name="country" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('country')
                        {{message}}
                        @enderror
</span>

</div>
<div class="form-group col-md-6 required">
                    <label for="">State : </label>
                    <input type="text" name="state" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('state')
                        {{message}}
                        @enderror
</span>

</div>
<div class="form-group col-md-6 required">
                    <label for="">Address : </label>
                    <input type="text" name="address" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('address')
                        {{message}}
                        @enderror
</span>

</div>
<div class="form-group col-md-6 required">
                    <label for="">DOB : </label>
                    <input type="date" name="dob" id="" class="form-control"/>
                    <span class="text-danger">
                        @error('dob')
                        {{message}}
                        @enderror
</span>

</div>
<div>Gender :</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="O">
  <label class="form-check-label" for="inlineRadio2">Other</label>
</div>

<button class="btn btn-primary">Submit</button>
</div>

</form>

  </body>
</html>