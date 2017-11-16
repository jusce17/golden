<?php
session_start();

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
         
         <?php
$servername = "localhost";
$username = "root";
$password = "apmsetup";
$dbname = "assigment3_eden";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("connection failed: " .mysqli_connect_error());
    
    
}

if(isset($_POST['table'])){
   
    $table_id= $_POST['table'];
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM tables WHERE user_id='".$user_id."'";
    $reservation_state = mysqli_query($conn, $query);
    
    $count=mysqli_num_rows($reservation_state);

    $row = mysqli_fetch_assoc($reservation_state);
    $table_id_check = $row["table_id"];
    
    if($count > 0){
        echo "<h3>sorry ".$_SESSION['user_name']."  but you already have a reservation for table ".$table_id_check.".</h3";
       
        echo " <h1>Click  <a href='my_reservation.php'>  here </a> to go to your reservation page </h1> ";
    } else{
    
    
    
   
	
	  $query = "UPDATE tables SET  state= 'booked', user_id = $user_id WHERE table_id = '".$table_id ."'";
    
    if( mysqli_query($conn, $query)){
           
            echo "A Reservation has been made in the tbale " . $table_id ;
        echo "<h2 class='text-muted'>your Reservation has been made in the tbale #" .$table_id. " </h2>";
        
       echo "<img src='images/loader.gif' height='50' width='50' >";
    echo "<p>you are being redirected to the main</p>";
           
          
        header("Refresh: 2; url=main.php"); 
           
       } else {
    echo "Error updating record: " . mysqli_error($conn);
}
    
}

    
}

?>

        
      </div>
    </div>
    
    <div class="row text-center">
    

      
 
</div>
 
 
  
</body>

</html>