<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Update User</title>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">Update User</div>
      @if(Session::has('fail'))
        <span class="alert alert-danger p2">{{Session::get('fail')}}</span>
      @endif
      <div class="card-body">
        
        <!--========= Form start ==========-->
        <form method="post" action="{{ route('EditUser') }}">
          @csrf
          <input type="hidden" name="user_id" id="" value="{{$user->id}}">
          <div class="form-group">
            <label for="FullName">Full Name</label>
            <input name="full_name" value="{{ $user->name }}" type="text" class="form-control" id="exampleFullName" aria-describedby="name" placeholder="Enter Your Name">
            @error('full_name')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPhoneNumber">Phone Number</label>
            <input name="phone_number" value="{{ $user->phone_number }}" type="text" class="form-control" id="exampleInputPhoneNumber" placeholder="Enter Phone Number">
            @error('phone_number')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>