<?php
error_reporting(0);
session_start();
$username=$_SESSION['username'];
  include_once 'User/class/UserClass.php';
   include 'admin/class/AdminClass.php';
    $team = new AdminClass();
  $user = new UserClass();

 

      if (isset($_GET['logout'])) {
          $get=$_GET['logout'];
  
          $logout=$user->Logout($username);
      }
	  $screen_name = $_SESSION['request_vars']['screen_name'];
?>
<!doctype html>
<html>
<head>
<title>Chitwan Educational Institute</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<!--script-->
<script>
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--Accordians CSS-->
<style>
	.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<!--/script-->
</head>
	<body>
<!--header-->
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Chitwan<br /><span>Institute</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
								<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
								<li><a href="about.php"><span data-hover="About">About</span></a></li>
								<li><a href="courses.php"><span data-hover="Courses">Courses</span></a></li>
								<li><a href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
								<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
								<?php 
				if($username)
				{?>
			<li><a href="?logout=<?php echo $_SESSION['username'];?>"><span>Logout</span></a></li>
				<?php } if ($screen_name)
				{?>
				<li><a href="?logout=<?php echo $_SESSION['username'];?>"><span>Logout</span></a></li>
				<?php } ?>
		<?php if($username==false AND $screen_name==false){?>
								<li><a href="login.php"><span>Login</span></a></li>
								<?php }?>
								
							</ul>
								<?php 
							if($_SESSION['username']==true)
							{?>
								<a href="User/dashboard.php" 
								style="margin-left: 30px; font-family: cambria;color: white;padding: 10px 10px 10px 10px; background-color: green;">
								<label style="color: yellow;"><?php echo $_SESSION['username'];?></label></a>
							<?php }
							if($screen_name)
							{?>
								<a href="User/dashboard.php" 
								style="margin-left: 30px; font-family: cambria;color: white;padding: 10px 10px 10px 10px; background-color: green;">
								<label style="color: yellow;"><?php echo $screen_name;?></label></a>
							<?php }
							?>
							
							


							
							

							<div class="clearfix"> </div>
						</div><!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
				
			
								
					    </div><script src="js/menu_jquery.js"></script>
					 
			</nav>
<!--/script-->
		   <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>About</h2>
	</div>
</div>
<!--header-->
<!-- About -->
<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="images/abt.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
				 <h3>About Chitwan Educational Institute</h3>
				 <p> 
Chitwan Educational Institute  is a complete educational Institute, which is located in the heart of Rantnanagar-12, Tandi sub metropolitan City, Chitwan,Nepal. This Educational institute was established in 2010 and has been providing the qualitative  education services to enhance student’s further educational career. This institute was established to make education services easy and to provide quality education.</p>
				 <ul>
					 <li>Providing the satification to the student.</li>
					 <li>Offer a dynamic, interactive education environment that engages students in the learning process.</li>
					 <li>Provide constructive feedback to promote student self- assessment and motivation.</li>
				 </ul>
			 </div>
			 <div class="clearfix"> </div>
		 </div>
		 <div class="testimonals">
				<button class="accordion">Our Mission Vision and Philosophy</button>
                 <div class="panel">
				<div class="testimonal-grids">
					 <div class="col-md-4 testimonal-grid">
						 <div class="testi-info">
						 <p>"Chitwan Educational Institute firmly believes and concentrates on the motto that “Student’s success is our top Priority”. We always focus on student’s welfare first and are fully committed to helping them to choose a course and place them in the right institution."</p>
						 <h4>Our Mission</h4>
					
						 </div>
					 </div>
					 <div class="col-md-4 testimonal-grid">
						 <div class="testi-info">
						 <p>"We want to grow as the most valued, trusted and preferred education adviser in Nepal, serviced by a team of attentive, caring and professional individuals as well as offer a dynamic, interactive education environment that engages students in the learning process"</p>
						 <h4>Our Vision</h4>
						 </div>
					 </div>
					 <div class="col-md-4 testimonal-grid">
						 <div class="testi-info">
						 <p>"Every individual is distinct, and they have their strength and interest. Therefore, we follow our professional aim in placing the student into the right course at the right educational institution for the excellent reasons as well as also helps to satify the student."</p>
						 <h4 >Our Philosophy</h4>
						 </div>
						 </div>
					 </div>
									 <div class="clearfix"></div>
				</div>
		   </div>
		   <style>
		   table td{
		   	padding:50px 50px ;
		   	width: 100px;


		   }
	

		   </style> 
		   <div class="team" ng-app="fetch_team" ng-controller="controller" ng-init="fetch_team()">
		 
		<h3>Our Team</h3>
			 <marquee behavior="alternate" direction="right" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">
		 <div class="row" ng-repeat="x in names" style="display:inline-block;">
			  <div class="grid-4">
			  	 <table>
       
				 <div class="team-grid">


				 
				 		  
				
				 <td>
						   <img src="admin/{{x.image}}" alt="image" width="200px" height="200px" >
						   <h4 align="center">{{x.name}} </h4>
						  <p align="center">{{x.about}} </p>
						  </td>
						   </div>
						  

					  </div>
					   </table>
			  </div>
			 
			  </marquee>
		
		
			 <div class="clearfix"> </div> 
		  </div>
	 </div>
</div>
<!-- /About -->
<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
						<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">courses</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="admin/login.php">Admin Login</a></li>
				</ul>
				<form>
					<input type="text" placeholder="Email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="col-md-3 footer-middle">
				<h3>Address</h3>
				<div class="address">
					<p>Ratnanagar-12, Tadi 
						<span>Chitwan, Nepal.</span>
					</p>
				</div>
				<div class="phone">
					<p>+977-9845217840</p>
				</div>
			</div>
			<div class="col-md-3 footer-right">
				<h3>Link for web services</h3>
				<ul class="row">
				    <li class="col-lg-12" col-sm-12 col-xs-3"><a href="JSON/jsonencode.json">JSON Encode</a></li>
				      <li class="col-lg-12" col-sm-12 col-xs-3"><a href="JSON/eventtbl.php">JSON Table</a></li>
				        <li class="col-lg-12" col-sm-12 col-xs-3"><a href="XML/event.xml">Event List As XML</a></li>
				        <li class="col-lg-12" col-sm-12 col-xs-3"><a href="XML/convert.php">XML as HTML Table Using XSLT</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>© 2018 Chitwan Educational Institute. All rights reserved |</p>
			</div>
			<div class="copyright-right">
				<ul>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="twitter facebook"> </a></li>
					<li><a href="#" class="twitter chrome"> </a></li>
					<li><a href="#" class="twitter pinterest"> </a></li>
					<li><a href="#" class="twitter linkedin"> </a></li>
					<li><a href="#" class="twitter dribbble"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>
		<!-- //container -->
		<!---->
<script>
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
	</div>
<!--/copy-rights-->
	</body>
</html>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
    var app = angular.module("fetch_team", []);
    app.controller("controller", function($scope, $http) {
        $scope.fetch_team = function() {
            $http.get("angularjs/FetchTeam.php")
                .success(function(data) {
                    $scope.names = data;
                });
        }
    });
</script> 