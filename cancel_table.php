<?php
session_start();
include 'connection.php';

?>




<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title> RESERVATION HOME PAGE</title>
 <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="style.css">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

 </head>
  <body>



<div class="container">

     <div class="row">
         <div class="col-md-12">
              <hr id="title-line">
        </div>

      </div>

    <div class="row">
     <div class="col-md-12">
     <img src="images/dinner_cover.jpg" >

        </div>
    </div>
    <div class="row">
         <div class="col-md-12">

         <?php

if(!$conn){
	die("connection failed: " .mysqli_connect_error());


}

if(isset($_POST['table'])){

   $null = 20;
    $table_id= $_POST['table'];





	  $query = "UPDATE tables SET  state= 'free', user_id = '".$null."' WHERE table_id = '".$table_id ."'";

    if( mysqli_query($conn, $query)){

            echo "you have successfully canceled your Reservation for the tbale " . $table_id ;
        echo "<h2 class='text-muted'>you have successfully canceled your Reservation for the tbale #" .$table_id. " </h2>";

       echo "<img src='images/loader.gif' height='50' width='50' >";
    echo "<p>you are being redirected to the main page</p>";


        header("Refresh: 3; url=main.php");

       } else {
    echo "Error updating record: " . mysqli_error($conn);
}

}




?>


      </div>
    </div>

    <div class="row text-center">




</div>



</body>

</html>
