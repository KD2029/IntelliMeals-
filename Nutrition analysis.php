<?php
       if (isset($_POST['submit'])){ 
           
$url = 'https://edamam-edamam-nutrition-analysis.p.rapidapi.com/api/nutrition-data?ingr=';
 $ingredient=$_POST['ingr'];
    //$data= array('$ingredient'=>$_POST['ingr']); // Add parameters in key value
    $request_url = $url.$ingredient;    
     $curl = curl_init($request_url);

 curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
    CURLOPT_POSTFIELDS => json_encode($ingredient),
	CURLOPT_MAXREDIRS => 10,	CURLOPT_TIMEOUT => 30,
 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 	CURLOPT_CUSTOMREQUEST => "GET",
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



    
  
