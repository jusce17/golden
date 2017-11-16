
<!DOCTYPE html>
<?php
include 'connection.php';
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Saving the data</title>





      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

   <!-- <div class="wrapper">
    <form  class="form-signin">
      <h2 class="form-signin-heading"></h2> -->
      <div class="container">
         <div class="row">
              <hr id="title-line">


         <div class="col-md-12">
          <h2 class="text-muted">Please remember your ID</h2>




<?php




 // Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//declaring the variables that are coming from the index page
$user_id  =   $_GET["user_id"];
$email  =   $_GET["email"];
$name  =   $_GET["name"];
$password =    $_GET["password1"];

$sql = "INSERT INTO users (user_id, email, name, password) VALUES ('$user_id', '$email', '$name', '$password')";

if(mysqli_query($conn, $sql)){
	echo "account created successfully <br><br>";
    echo "<img src='images/loader.gif' height='50' width='50' >";
    echo "<p>you are being redirected to the sigin uppage</p>";

  header("Refresh: 2; url=login.php"); //redirect


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>


     <hr id="title-line">
    </div>
    </div>



</body>






</html>
