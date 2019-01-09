<?php
session_start();
  include_once 'class/AdminClass.php';
  $admin = new AdminClass();

  if (isset($_REQUEST['submit1'])) {
    extract($_REQUEST);
      $login = $admin->AdminLogin($username, $password);
      if ($login) {
          // Registration Success
           echo "<script>alert('Successfully Logged In.');</script>";
         header("location:dashboard.php");
      } else {
          // Registration Failed
          echo 'Wrong username or password';
             echo "<script>alert('Invalid Details.');</script>";
      }
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form of Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="login(css)/demo.css" />
        <link rel="stylesheet" type="text/css" href="login(css)/style.css" />
		<link rel="stylesheet" type="text/css" href="login(css)/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="../index.php">
                    <strong>&laquo; Go Back: </strong>Homepage
                </a>
               
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login Form <span>Admin Panel</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form name="form1" action="" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit1" /> 
								</p>
                                
                            </form>
                        </div>

                        
                            
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>