<?php
// Start the session
session_start();
include 'connection.php';



?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title> ADMINSTRATION TOOLS</title>
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

      <div class="col-md-12 text-right text-uppercase">
       <?php  $_SESSION['user_name']; ?>

          <h3 class="small" >logged in as <?php echo $_SESSION['user_name']; ?> </h3>
        <a href="main.php"> <h3 class="small" >go back</h3> </a>
      </div>

    </div>
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
          <h2 class="text-muted">Adminstration tools</h2>
      </div>
    </div>

    <div class="row text-center">









      <?php


if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}
        $all_tables = "SELECT * FROM tables";
        $booked_tables = "SELECT * FROM tables WHERE state = 'booked'";
        $free_tables = "SELECT * FROM tables WHERE state = 'free'";

        $show_tables = mysqli_query($conn, $all_tables);
        $show_booked_tables = mysqli_query($conn, $booked_tables);
        $show_free_tables = mysqli_query($conn, $free_tables);

 echo "<h4>the total number of tables is   <span class='high'>". mysqli_num_rows($show_tables) . "</span></h4>";
 echo "<h4> <span class='high'>" . mysqli_num_rows($show_booked_tables) . "</span> tables have been booked so far </h4> " ;
 echo "<h4>there are still  " . mysqli_num_rows($show_free_tables). " free tables</h4> <br>";
echo "   <h3>Booked tables</h3> ";

        if(mysqli_num_rows($show_booked_tables)>0){
	           while($row = mysqli_fetch_assoc($show_booked_tables)){
	               echo "<div id='all_tables'>";

			         echo "<div class='profiles'>". "ID#: " . $row["table_id"]. " <br> Current state: " . $row["state"]. "<br> Booked by user: " . $row["user_id"].   "</span></div>";

			echo "</div>";


		}

}



?>







</div>
<br><br>
<div class="container">
    <div class="row">

      <div class="col-md-12 text-center text-uppercase">




         <br>
          <a href="#">  <h3 class="small">Copyright (c) 2016 - Eden Juscelino </a>

         <br>
      </div>

          </div></div>






 <script>
     $(document).ready(function() {
         $('.booked').attr('disabled', true);

     });

    </script>
</body>

</html>
