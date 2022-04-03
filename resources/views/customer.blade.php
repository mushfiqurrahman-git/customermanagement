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
                    <input type="password_confirmation" name="password_confirmation" id="" class="form-control"/>
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
<button class="btn btn-primary">Submit</button>
</div>

</form>

  </body>
</html>