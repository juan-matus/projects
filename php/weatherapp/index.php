<?php

error_reporting(E_ERROR | E_PARSE);

if(isset($_GET["city"])){


    $conten_in_json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET["city"]."&appid=d57f8ef4e3d82d5da960891fad51b7cc");

    $forcast_array = json_decode($conten_in_json, true);
    
    $weather = $forcast_array['weather'][0]['description'];
};
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Weathermap</title>
  </head>
  <body>

    <div id="container1">
        <h1>Wather in the city</h1>

<form>
  <div class="form1">
    <label for="city">Input a city name</label>
    <input type="text" class="form-control" name="city" id="city" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>

<?php

if(isset($weather)){
    echo "<div id='infowindow'class='alert alert-primary' role='alert'>"."The weather in ".$_GET["city"]." is ".$weather."</div>";

};

?>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
  </body>
</html>


