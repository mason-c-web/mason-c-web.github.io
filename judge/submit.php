
<?php

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
<body>

<style>
img{
    width:25%;}

</style>


<nav class="navbar navbar-default">
  <div class="container">
    
       <a class="navbar-brand" href="index.html">JudgeClaresOutfits.com</a><img style="width:30px;" src="images/faces/face2.png">

  </div>
</nav>


<!-- First Container -->
  <div class="jumbotron" style=" margin: 0 auto; width:80%; ">';


  $servername = "statsnow.fatcowmysql.com";
  $username = "clare";
  $password = "clare";
  $dbname = "claredata";

  $conn = new mysqli("statsnow.fatcowmysql.com", $username, $password, $dbname);
  if ($conn->connect_error) {
      echo("Connection failed: " . $conn->connect_error);
  }

echo'<center>
 <img  src="'.$_POST['coats'].'">
        <img  src="'.$_POST['tops'].'">
        <br/>
        <img   src="'.$_POST['bottoms'].'">
        <img   src="'.$_POST['shoes'].'">

<div>Looks  great!
<br/>
  <a href="judge.php" class="btn btn-info" role="button">Judge</a>
    <a href="make.php" class="btn btn-info" role="button">Make Another</a>

</div>
</center>
';
  $sql = "INSERT INTO outfits ( faceURL, coatURL, bottomURL, topURL, shoeURL) VALUES ('".$_POST['face']."','".$_POST['coats']."','".$_POST['bottoms']."','" . $_POST['tops']."','". $_POST['shoes']."');";
$conn->query($sql);

   

     $conn->close();
?>


</div>



</body>
</html>
