      <?php

include 'connection.php';

$id_val =0;
$email_val = 0;

	 // Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["user_id"]))
{



    $user_id = filter_var($_POST["user_id"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);


    $statement = $conn->prepare("SELECT user_id FROM users WHERE user_id=?");
    $statement->bind_param('s', $user_id);
    $statement->execute();
    $statement->bind_result($user_id);
    if($statement->fetch()){

        die( "<p  class='wrong'> the ID is  not available, user Integer numbers only</p>");
    }
    else{
    	 $id_val = 1;

        die( "<p class='right'> The ID is available</p>");


    }
}



if(isset($_POST["email"]))
{



    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);


    $statement = $conn->prepare("SELECT email FROM users WHERE email=?");
    $statement->bind_param('s', $email);
    $statement->execute();
    $statement->bind_result($email);
    if($statement->fetch()){

        die("<p  class='wrong'> this e-mail not available</p>");
    }
    else{
    	$email_val = 1;

        die( "<p class='right'> the e-mail is available</p>");

    }
}



?>
