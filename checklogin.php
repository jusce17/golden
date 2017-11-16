<?php

session_start();

include 'connection.php';






//connect to server and select database
$conn= mysqli_connect("$servername", "$username", "$password") or die ("cannot connect");
mysqli_select_db($conn,"$dbname") or die ("cannot select DB");

//username and password send from form
$user_id=$_POST['user_id'];
$password=$_POST['password'];




//to protect MySQL injection
$user_id = stripslashes($user_id);
$password = stripslashes ($password);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$query="SELECT * FROM users WHERE user_id='$user_id' and password='$password' ";
$result=mysqli_query($conn, $query);

$query_for_name="SELECT name FROM users WHERE user_id='$user_id' and password='$password' ";
$get_name=mysqli_query($conn, $query_for_name);




$count=mysqli_num_rows($result);//Mysql_num_row is counting table row

$row = mysqli_fetch_assoc($result);
$user_name = $row["name"];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


    $_SESSION['user_name'] = $user_name;
	$_SESSION['user_id'] = $user_id;


    if (isset($_POST['user_id'])  ) {
  echo  $_SESSION['user_id'] = $_POST['user_id'];
      echo  $_SESSION['user_name'];

}

	header("location:main.php");

	} else {
		echo "wrong username or password";
       // header("location:login.php");
        header("Refresh: 2; url=login.php");


		}
ob_end_flush();




?>
