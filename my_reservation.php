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
 <title>MY RESERVATION </title>
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




        <div class="col-md-12 text-center text-uppercase">
                   <br>
<a href="admin.php"><h5  >Admin tools  </a> |

        <a href="main.php"> Main Page</a> |
         <a href="logout.php"> log out</h5>  </a>
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


    <div class="row text-center">








      <?php



// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$all_tables = "SELECT * FROM tables WHERE user_id='".$user_id."'";
$show_tables = mysqli_query($conn, $all_tables);
if(mysqli_num_rows($show_tables)>0){
	while($row = mysqli_fetch_assoc($show_tables)){
        echo '  <h2>Reservation page</h2>
      <h3> here are the tables you reserved</h3>
      <h3>Click on the table you want to  cancel the reservation</h3>';

      echo ' <form action ="cancel_table.php" method ="post"><input type="submit" name="table" class= "tables ' . $row["state"]. '" value=" '. $row["table_id"].'"> </input> </form> ';


		}

}else{

        echo ' <br><br><h2> You have no reservation </h2> ';
    }



?>







</div>
      </div>
         <br><br><br><br><br>  <br><br><br><br><br>

         <div class="container">
    <div class="row">

      <div class="col-md-12 text-center text-uppercase">




         <br>
          <a href="#">  <h3 class="small">Copyright (c) 2016 - Eden Juscelino </a>

         <br>
      </div>

          </div></div>







</body>

</html>
