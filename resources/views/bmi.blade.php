
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sign up </title>
    <link rel="stylesheet"  type="text/css" href="{{asset('css/bmi.css')}}">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>title</title>
   <style>
     
       </style>
   
</head>

<body>
<div class="container">
<div class="brand-title">INTELLImeals</div>
   <form method="post" action="bmi"border="0">
       {{$errors}}
       @csrf
       <div class="inputs">
       <label>Mass in kilogram (kg):</label>
       <input type="textbox" id="t" name="mass" placeholder="Weight"><br>
       <label>Height in meter (m):</label>
       <input type="textbox" id="p" name="height" placeholder="Height"><br>

       <button  type="submit"> Submit</button>
</form>
</div>
@isset($k)
{{$k}}
@endisset

</body>
</html>