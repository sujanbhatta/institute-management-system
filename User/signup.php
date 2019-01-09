<?php
include "class/UserClass.php";

$user = new UserClass(); // Checking for user logged in or not

 if (isset($_REQUEST['submit'])){

 extract($_REQUEST);
 $password = md5($_POST['password']);
 $confirm_password = md5($_POST['confirm_password']);

 $register = $user->reg_user($firstname,$lastname,$address,$contact,$username,$email,$password,$confirm_password);
 if ($register) {
 // Registration Success
echo "<script>alert('Sign Up Successfully');</script>";
echo "<script>window.location.href='../index.php';</script>";



 } else {
 // Registration Failed
echo "<script>alert('Error in signup');</script>";
 }
 }
      
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Signup Form of User</title>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

  
      
      <link rel="stylesheet" href="signup(css)/style.css">


  
</head>
<style>
.text-success{
  color: green;
  font-family: cambria;
  float: left;
}
.text-danger{
  color: red;
  font-family: cambria;
  float: left;
}
.not-exists{
    color: green;
}

.exists{
    color: red;
}
</style>



  <div id="login-box">

  <div class="left">
  <form name="form1" action="signup.php" method="POST">

    <h1>Sign up</h1>
      <input type="text" name="firstname" placeholder="First Name" >
        <input type="text" name="lastname" placeholder="Last Name">
        <input type="text" name="address" placeholder="Address">

        <input type="text" minlength="10" maxlength="10" name="contact" id="contact" placeholder="Contact Number">

    <input type="text" name="username" placeholder="Username" id="username">
     <div id="username_response" class="response"></div>

    <input type="email" name="email" id="email" placeholder="E-mail" required="">
    <div id="email_response" class="response"></div>


    <input type="password" name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">

     <span id='message'></span>
    <input type="password" name="confirm_password" placeholder="Retype password" id="confirm_password"  required>



    <button type="submit" name="submit" id="submit">Sign Up</button>
 
    <!-- <input type="submit" name="submit" id="submit" value="Sign me up"> -->

  </div>

  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
  
  

</body>
</form>

</html>



<script>
//Validation for Username already exists using ajax
$(document).ready(function(){

   $("#username").keyup(function(){

      var username = $("#username").val().trim();

      if(username != ''){

         $("#username_response").show();

         $.ajax({
            url: 'checkusername.php',
            type: 'post',
            data: {username:username},
            success: function(response){

                if(response > 0){
                    $("#username_response").html("<span class='exists'>* Username Already in use.</span>");
                }else{
                    $("#username_response").html("<span class='not-exists'>Available.</span>");
                }

             }
          });
      }else{
         $("#username_response").hide();
      }

    });

 });

//Validation for email exists using ajax
$(document).ready(function(){

   $("#email").keyup(function(){

      var email = $("#email").val().trim();

      if(email != ''){

         $("#email_response").show();

         $.ajax({
            url: 'checkemail.php',
            type: 'post',
            data: {email:email},
            success: function(response){

                if(response > 0){
                    $("#email_response").html("<span class='exists'>* Email Already in use.</span>");
                }else{
                    $("#email_response").html("<span class='not-exists'>Available.</span>");
                }

             }
          });
      }else{
         $("#email_response").hide();
      }

    });

 });

$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password Match').css('color', 'green');
  } else 
    $('#message').html('*Not Matching').css('color', 'red');
});

</script>