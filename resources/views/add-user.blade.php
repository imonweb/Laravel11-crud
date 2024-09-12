<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Add New User</title>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">Add New User</div>
      @if(Session::has('fails'))
        <span class="alert alert-danger p2">{{Session::get('fail')}}</span>
      @endif
      <div class="card-body">
        <form method="post" action="{{ route('AddUser') }}">
          @csrf
          <div class="form-group">
            <label for="FullName">Full Name</label>
            <input name="full_name" value="{{old('full_name')}}" type="text" class="form-control" id="exampleFullName" aria-describedby="name" placeholder="Enter Your Name">
            @error('full_name')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPhoneNumber">Phone Number</label>
            <input name="phone_number" value="{{old('phone_number')}}" type="text" class="form-control" id="exampleInputPhoneNumber" placeholder="Enter Phone Number">
            @error('phone_number')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" value="{{old('password')}}" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            @error('password')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputConfirmPassword">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
            @error('password_confirmation')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>