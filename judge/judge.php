<?php



echo '<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>JudgeClaresOutfits.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    
      <a class="navbar-brand" href="index.html">JudgeClaresOutfits.com</a><img  width="30px" src="images/faces/face2.png">

 
  </div>
</nav>

<!-- First Container -->
<div class="jumbotron" style="float: left; clear:both; width: 100%">';
$servername = "statsnow.fatcowmysql.com";
$username = "clare";
$password = "clare";
$dbname = "claredata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}

$sql = "select * from outfits ORDER BY score DESC;";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if( $row['score'] > 0){
       echo' <div style="margin: 10px;float:left; width:145px; background-color: lightgreen; border-radius: 25px; padding:10px;"><center>';
    }
    elseif($row['score'] < 0){
       echo' <div style="margin: 10px;float:left; width:145px; background-color: firebrick; border-radius: 25px; padding:10px;"><center>';

    }
    else{
       echo' <div style="margin: 10px;float:left; width:145px; background-color: lightblue; border-radius: 25px; padding:10px;"><center>';

    }
         echo'      <img style="padding:5px;" width="135px" src="'.$row['faceURL'].'">
        <img  style="padding:5px;" width="135px" src="'.$row['topURL'].'">
        <img style="width:30px; float:right;margin-left:30px;"  src="images/handleft.png">
                <img style="width: 30px; float:right; "  src="images/handright.png">
        <img style="padding:5px;"  width="135px" src="'.$row['bottomURL'].'">
        <img style="padding:5px;" width="135px" src="'.$row['shoeURL'].'">
       <form action="" method="get">
<input style="width:30px; height:30px; float:left; color:transparent; background-color: transparent; background-image: url(images/uparrow.png);" type="submit" name="add" value="'.$row['outfitID'].'" /><div style="font-size:18px; margin-left:20px; margin-right:20px; float:left;">
'.$row['score'].'</div>
<input style="width:30px;float:left; height:30px; color:transparent; background-color: transparent; background-image: url(images/downarrow.png);" type="submit" name="subtract" value="'.$row['outfitID'].'" />

</form></center></div>';
}

} else {
    echo "0 results";
}

if(isset($_GET['add'])){
$sql = "UPDATE outfits SET score = score + 1 WHERE outfitID =".$_GET['add'].";";
$conn->query($sql);
$change= True;
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
} 

if(isset($_GET['subtract'])){
$sql = "UPDATE outfits SET score = score - 1 WHERE outfitID =".$_GET['subtract'].";";
$conn->query($sql);
$change =True;
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
} 


$conn->close();


?>
</div>



<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
</footer>

</body>
</html>
