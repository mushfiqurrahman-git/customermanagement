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
      <form action="{{url('/')}}/register" method="post">
        @csrf
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