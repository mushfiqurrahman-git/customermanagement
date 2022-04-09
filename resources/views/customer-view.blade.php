<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <table class="table">
            <thread>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
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
                    
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    
                    <td>
                        @if($customer->status == "1")
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        <table>
    </div>
  </body>
</html>