<?php
       if (isset($_POST['submit'])){ 
$url = 'https://edamam-edamam-nutrition-analysis.p.rapidapi.com/api/nutrition-data?ingr=';
     
    $data= array('$ingredient'=>$_POST['ingr']); // Add parameters in key value
    $request_url = $url;    
     $curl = curl_init($request_url);

 curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
	CURLOPT_MAXREDIRS => 10,	CURLOPT_TIMEOUT => 30,
 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 	//CURLOPT_CUSTOMREQUEST => "GET",
 	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: edamam-edamam-nutrition-analysis.p.rapidapi.com",
 		"X-RapidAPI-Key: 0c76a840a1msh7384bff5263a298p101a74jsn97284c931c48"
 	],
 ]);
 $response = curl_exec($curl);
 $err = curl_error($curl);

 curl_close($curl);

 if ($err) {
 	echo "cURL Error #:" . $err;
 } else {
 	echo $response;
 }      
       }
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       
        <style>
          
form{

font-family:sans-serif;
font-size: 12px;
width: 100%;
max-width: 500px;
padding: 10px;
border: solid thin #aaa;
margin:auto;
}
header{
    font-size: 20px;
    background-color: #ddd;
    padding: 1em;
}
#t,#p {
    width: 95%;
    padding: 10px;
    border: solid thin #aaa;
    border-radius: 5px;
    margin: 5px;
    background-color: #ddd;
}
form .btn{
    width: 120px;
    background-color: blue;
    color: white;
    border-radius: 5px;
    margin: 10px;
    cursor: pointer;
}
form {
    marin-top: 50%;
}
        </style>
    </head>
    <body class="antialiased">
    <header>
    <a href="">Home</a> . <a href="">About Us</a>  . <a href="">Contactus</a>
    </header>
    
    <form method="post" action=>
        <input type="textbox" id="t"  name="ingr" placeholder="Ingredient"> <br>
        <input type="button"  name="submit" class="btn" value="Submit">
    </form>
      
   </body>
   </html>


    
  
