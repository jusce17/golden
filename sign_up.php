<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src="js/sign_up_scripts.js"></script>
  


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
    <form action="save_data.php" method="get" class="form-signin">       
      <h2 class="form-signin-heading">Sign up</h2>
      
       <span id="user-result"></span>
      <br> <input class="form-control" type="text" name="user_id" placeholder="ID - integer numbers only" id="user_id" required ><br>
      
     <span id="email-result"></span>
      <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required="" autofocus="" />
      
      <br>
         <input class="form-control" type="text" name="name" id="username" placeholder=" NAME" required=""><br>
      
         <input   class="form-control" type="password" name="password1" id="password1" placeholder="Enter Password" required=""/> 
         
         <span id="password-result"></span>
         
         <input class="form-control" type="password" name="password2" id="password2" placeholder="enter your password again"  onkeyup="checkPasswordMatch()"  required=""> 
         
         
         
  
         
         
      
      <button class="btn btn-lg btn-primary btn-block" id="signup_button" type="submit" disabled>Sign up</button>  
      <br><br><br>
      <p><a href="login.php"> I already have an account</a></p> 
    </form>
  </div>
  
  
</body>






</html>






