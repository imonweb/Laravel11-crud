<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Laravel 11 CRUD</title>
  </head>
  <body>
    {{--  --}}
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">
          LARAVEL 11 CRUD
          <a href="/add/user" class="btn btn-success btn-sm float-end">Add New</a>
        </div>
        @if(Session::has('success'))
          <span class="alert alert-success p-2">{{Session::get('success')}}</span>
        @endif

        @if(Session::has('success'))
          <span class="alert alert-success p-2">{{Session::get('success')}}</span>
        @endif

        <div class="card-body">
          <table class="table table-sm table-striped table-bordered">
            <thead>
              <th>S/N</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Registration Date</th>
              <th>Last Update</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
                @if(count($all_users) > 0)
                  @foreach($all_users as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->phone_number}}</td>
                    <td>{{ $item->created_at}}</td>
                    <td>{{ $item->updated_at}}</td>
                    <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                  @endforeach
                @else 
                  <tr>
                    <td colspan="8">No User Found!</td>
                  </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>