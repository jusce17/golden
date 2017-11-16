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

      <div class="col-md-12 text-right text-uppercase">

        <h3 class="small">WELCOME BACK, <?php echo $_SESSION['user_name']; ?> </h3>




         <br>
          <a href="admin.php">  <h3 class="small">Adminstration tools  </a> ||
        <a href="my_reservation.php">  My Reservations  </a> ||
         <a href="logout.php"> log out</h3>  </a>
         <br>
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
          <h2 class="text-muted">Our Tables</h2>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4">
       <img src="images/food3.jpg" class="img-responsive">

        <h3 class="text-uppercase">Wine</h3>

      </div>

    <div class="col-md-4">
       <img src="images/food2.jpg" class="img-responsive">

        <h3 class="text-uppercase">Fusion</h3>

      </div>


      <div class="col-md-4">
       <img src="images/food1.jpg" class="img-responsive">

        <h3 class="text-uppercase">Steaks</h3>
        <br><br>

      </div>




      <h3>Click on the table you want to reserve</h3>
      <?php



// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}


$all_tables = "SELECT * FROM tables";
$show_tables = mysqli_query($conn, $all_tables);
if(mysqli_num_rows($show_tables)>0){
	while($row = mysqli_fetch_assoc($show_tables)){

      echo ' <form action ="check_table.php" method ="post"><input type="submit" name="table" class= "tables ' . $row["state"]. '" value=" '. $row["table_id"].'"> </input> </form> ';


		}

}



?>







</div>
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
