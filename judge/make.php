
<?php
$facenum = rand( 0 , 4 );
$faceurl =array("face.png","face1.png","face2.png", "face3.png", "face4.png");
$facechoice = "images/faces/".$faceurl[$facenum];


echo'<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>JudgeClaresOutfits.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="make.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/faces/face.png">

</head>

<body>
<style>
body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
  }

  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }


  #bottoms, #tops, #shoes, #coats, #face{
      width:100px;
      margin-left:50%;
  }

  .choice{
      width: 200px;
  }
</style>


<nav class="navbar navbar-default">
  <div class="container">
    
      <a class="navbar-brand" href="index.html">JudgeClaresOutfits.com</a><img width="30px" src="images/faces/face2.png">
 
  </div>
</nav>
<!-- First Container -->
  <div class="jumbotron" style=" margin: 0 auto; width:80%; ">
    <div class="row" style ="height: 450px;">
    <div class="col-xs-6" >
       <div class ="choice">
    <img  id="face" width="100px;" src="'.$facechoice.'">

        </div>
   
  
      <div class ="choice" >
        <img   id="tops" src="">
  <img style="width:30px; float:right;margin-left:30px;"  src="images/handleft.png">
                <img style="width: 30px; float:right; "  src="images/handright.png">

        </div>
      <div class ="choice" >
        <img  id="bottoms" src="">

        </div>
      <div class ="choice" >
        <img  id="shoes" src="">

        </div>
    </div>
    <div class="col-xs-6">
    
    <form id="form" action="submit.php" method="post">
<input type="hidden" name="face" value="'.$facechoice.'" />';

  $servername = "statsnow.fatcowmysql.com";
  $username = "clare";
  $password = "clare";
  $dbname = "claredata";

  $conn = new mysqli("statsnow.fatcowmysql.com", $username, $password, $dbname);
  if ($conn->connect_error) {
      echo("Connection failed: " . $conn->connect_error);
  }
$clothing = array( "tops","bottoms","shoes");
  foreach($clothing as $value){
  $sql = "select * from " .$value;
  $result = $conn->query($sql);


echo'  <div class="form-group">

   <label for="exampleFormControlSelect1">'.$value.'</label>
    <select class="form-control" id="'.$value.'input" name="'.$value.'" onchange="updatechoice(';
    echo"'".$value."'";
    echo')">';
    echo "<option disabled selected>Select your ".$value."</option>";
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {

        echo "<option class='option' value='images/".$value."/".$row['source']."'>".$row['name']."</option>";
       // echo "<option value='images/shoes/black.jpg'>".$row['name']."</option>";

  }
  }
  echo"</select> </div>";
}




?>



</div>
</div>
<div style= "margin: 0 auto;">
  <center>
    <br>
    <br>
  <input type="submit" class='btn btn-info' id ='submit' >
  </center>
</form>

    </div>

</div>



</body>
</html>
