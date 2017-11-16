<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src="/scripts.js"></script>
  


      <link rel="stylesheet" href="css/login_style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<style type="text/css">
    .wrong{
    color: firebrick !important;
    font-weight: bold !important;
}
    .right{
        color:dodgerblue !important;
    }

    </style>

<body>
     
    <div class="wrapper">
    <form action="checklogin.php" method="post" class="form-signin">       
      <h2 class="form-signin-heading">Log in</h2>
      
       <span id="user-result"></span>
      <br> <input class="form-control" type="text" name="user_id" placeholder="ID" id="user_id" required ><br>
      
     <span id="email-result"></span>
      
      
      <br>
         
      
         <input   class="form-control" type="password" name="password" id="password1" placeholder="Enter Password" required=""/> 
         
         <span id="password-result"></span>
         
         
         
         
         
  
         
         
      
      <button class="btn btn-lg btn-primary btn-block" id="signup_button" type="submit" >Login</button>
     <br><br>
       <p><a href="sign_up.php">    Create an account</p></a>   
    </form>
  </div>
  
  
</body>






</html>






