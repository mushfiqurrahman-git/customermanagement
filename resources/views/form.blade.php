<!doctype html>
<html lang="en">
  <head>
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
      <form action="{{url('/')}}/register" method="post">
        @csrf
        @php
            $demo = 1;
        @endphp
      <div class="container">
        <x-input type="text" name="name" label="Please enter your name"/>
        <x-input type="email" name="email" label="Please enter your email"/>
        <x-input type="password" name="password" label="Please enter your password"/>
        <x-input type="password_confirmation" name="password_confirmation" label="Confirm  Password"/>
          
<button class="btn btn-primary">Submit</button>
</div>
</form>

  </body>
</html>