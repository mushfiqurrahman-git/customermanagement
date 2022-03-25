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
        <pre>
          @php
              print_r($errors->all());
          @endphp
        </pre>
      <div class="container">
          <h1 class="text-center">Registration</h1>
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-description"helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
</div><div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control" placeholder="" aria-description"helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
</div><div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" aria-description"helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
</div>
<button class="btn btn-primary">
    Submit
</button>
</div>
</form>

  </body>
</html>