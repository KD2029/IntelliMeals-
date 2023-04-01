<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>
   <link rel="stylesheet"  type="text/css" href="{{asset('/css/signup.css')}}">
   <style>
       </style>
  
</head>
<body>
<a href="{{route('welcome')}}">Home</a> .<a href="{{url('dashboard')}}">Dashboard</a>.
<div class="container">
<div class="brand-title">INTELLImeals</div>
<form method="post" border="0">
  @csrf
  <h1>Sign up</h1>
    <label>
    <input type="text" name="name" placeholder="name"/>
  </label>
  {{--@error('name')
   <span>{{$message}}</span>
   @enderror--}}
   <br>
  <label>
    <input type="text"name="email" placeholder="Email Address"/>
  </label>
  {{--@error('email')
   <span>{{$message}}</span>
   @enderror--}}
   <br>
  <label>
    <input type="password"name="password" placeholder="Password"/>
  </label>
  {{--@error('password')
   <span>{{$message}}</span>
   @enderror--}}
   <br>
  <button class="red" type="submit"><i class="icon ion-md-lock"></i> Sign Up</button>
  <br>
  <br>
  
  
  
  
</form>
  </div>

</body>
</html>