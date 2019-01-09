<?php
error_reporting(0);
session_start();
$username=$_SESSION['username'];
  include_once 'User/class/UserClass.php';
  include_once 'admin/class/AdminClass.php';
  $admin = new AdminClass();
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
<title>Chitwan Education Institute</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
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
	<h2>Gallery</h2>

	</div>
</div>
<!--header-->
<!-- gallery -->
	<div class="spacer agents" ng-app="fetch_gallery" ng-controller="controller" ng-init="fetch_gallery()">
		<div class="gallery">
			<!-- Page Starts Here -->
			<div class="content">
				<div class="container">
					<div class="gallery">
						<div class="gallery-top">
							
							<div class="row" ng-repeat="x in names"  style="display:inline-block;">
							<div class="view view-tenth">
								<img src="admin/{{x.image}}" alt="" />
								<div class="mask">
									<h3>Our Gallery</h3>
									<p>{{x.about}}</p>
								</div>
							</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Page Ends Here -->
		</div>
		<!-- //gallery -->
<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
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
<script type="text/javascript">
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
    var app = angular.module("fetch_gallery", []);
    app.controller("controller", function($scope, $http) {
        $scope.fetch_gallery = function() {
            $http.get("angularjs/FetchGallery.php")
                .success(function(data) {
                    $scope.names = data;
                });
        }
    });
</script> 