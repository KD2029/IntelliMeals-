
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       
           <link rel="stylesheet"  type="text/css" href="{{url('CSS/main.css')}}">
           <style>
      html, body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      }
      body, div, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      body {
      background: url("/uploads/media/default/0001/01/49bff73f282c2c21f3341f1fe457fe35337b1792.jpeg") no-repeat center;
      background-size:cover;
      }
      h1 {
      margin: 0 0 10px 0;
      font-weight: 400;
      }
      .main-block {
      display: flex;
      width: 600px;
      padding: 10px 0; 
      border-radius: 5px;
      box-shadow: 1px 1px 8px 0px #666; 
      background: #fff;
      }
      .block-item {
      width: 50%;
      padding: 20px; 
      }
      .block-item.right {
      border-left: 1px solid #aaa;
      }
      i {
      width: 50px;
      font-size: 24px;
      }
      .btn {
      display: flex;
      align-items: center;
      width: 100%;
      height: 40px;
      margin: 10px 0;
      outline: none;
      border: 0;
      border-radius: 5px;
      box-shadow: 2px 2px 2px #666;
      background: #e8e8e8;
      color: #101010;
      cursor: pointer;
      }
      .btn:hover {
      transform: scale(1.03);
      }
      .btn span {
      font-size: 16px;
      }
      .facebook {
      background: #3a589e;
      }
      .twitter {
      background: #429cd6;
      }
      .google{
      background: #d34836;
      }
    </style>
    </head>
    <body class="antialiased">
    <a href={{url('Logout')}}>Logout</a>
    <div class="main-block">
      <div class="block-item left">
        <form method="post" action="nutritionanalysis">
            @csrf
       <input type="textbox" id="t" name="ingr" placeholder="Ingredient"> <br>
       <input type="submit" id="k" name="submit" class="btn btn-primary btn-lg active" value="Submit">
     </form>
    
      </div>
      <div class="block-item right">
        
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">totalWeight</th>
      <th scope="col">calories</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
    </tr>
    
  </tbody>
</table>
      </div>
    </div>
        <div class="ShowDataHere">
         
        
        
        {{-- @php 
        use App\Http\Controllers\NutritionAnalysisController;
        $NutritionAnalysisController = new NutritionAnalysisController();
        $NutritionAnalysisController->retrieve('ingr');
        
        @endphp --}}
    </div >

    </body>
</html>
<script src="{{url('JS/main.js')}}"></script>