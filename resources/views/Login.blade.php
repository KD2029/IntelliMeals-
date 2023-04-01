<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet"  type="text/css" href="{{asset('/css/login.css')}}">
   <style>
    
       </style>
  
</head>
<body>
<a href="{{route('welcome')}}">Home</a> .<a href="{{url('dashboard')}}">Dashboard</a>.
<div class="container">
<div class="brand-title">INTELLImeals</div>
<form method="post" action="Login" border="0">
  @csrf
  
    <h1>Login</h1>
  
  

 
  <label>
    <input type="text"name="email" placeholder="Email Address"/>
  </label>
  @error('email')
   <span>{{$message}}</span>
   @enderror
   <br>
  <label>
    <input type="password"name="password" placeholder="Password"/>
  </label>
  @error('password')
   <span>{{$message}}</span>
   @enderror
   <br>
   <br>
  <button class="red" type="submit"><i class="icon ion-md-lock"></i> Log in</button>
  </label>
  
  
</form>
  </div>

</body>
</html>