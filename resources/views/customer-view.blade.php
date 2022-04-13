<!doctype html>
<html lang="en">
  <head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <div class="container">
        <a href="{{route('customer.create')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right"> Add</button>
        </a>
        <table class="table">
            <thread>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                </tr>
            <thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if($customer->gender == "M")
                        Male
                        @elseif($customer->gender == "F")
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->address}}</td>
                    
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    
                    <td>
                        @if($customer->status == "1")
                        <a href="">
                            <span class="badge rounded-pill bg-success">Active</span>
                        </a>
                        @else
                        <a href="">
                            <span class="badge rounded-pill bg-danger">Inactive</span>
                        </a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                        <button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('customer.edit',['id' => $customer->customer_id])}}">
                        <button class="btn btn-primary">Edit</button></a>
                </tr>
                @endforeach
            </tbody>
        <table>
    </div>
  </body>
</html>