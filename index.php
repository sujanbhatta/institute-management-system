<?php
error_reporting(0);
session_start();
 include 'User/class/UserClass.php';
 include 'admin/class/AdminClass.php';


  $admin = new AdminClass();
  $user = new UserClass();

$username=$_SESSION['username'];
$id=$_SESSION['id'];



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


<style>


.container .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;

}
.container button{
	margin-top: 80px;
}
.container .btn:hover {
    background-color: blue;
}

</style>

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
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
								Welcome:  &nbsp;<label style="color: yellow;"><?php echo $_SESSION['username'];?></label></a>
							<?php }
							if($screen_name)
							{?>
								<a href="User/dashboard.php" 
								style="margin-left: 30px; font-family: cambria;color: white;padding: 10px 10px 10px 10px; background-color: green;">
								Welcome:  &nbsp;<label style="color: yellow;"><?php echo $screen_name;?></label></a>
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
<div class="banner">
	<div class="container">
	<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>


<div style="padding:4px;width:100px;height:60px; ">
<script>
  (function() {
    var cx = '004470089366559352240:b8s63lsywy4';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</div>
<gcse:search></gcse:search>


<div class="slider">
		   <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>	    
				 	<h3>Formal education</h3>      
					 <p>Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through storytelling.</p>		          
					
				 </li>
				 <li>	
				 	<h3>Self-directed learning</h3>            
					 <p>Learning Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through storytelling.</p>		          
			
				 </li>
				 <li>	
				 	<h3>Learning modalities</h3>            
					 <p>Storytelling Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through.</p>		          
			
				 </li>
			  </ul>
		  </div>
	  </div>
</div>			
	</div>
<!--header-->
<!--weelcome-->
<div class="welcome">
	<div class="container">
		<h2>Welcome To Chitwan Educational Institute</h2>
		<p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills deemed necessary in their society. In pre-literate societies this was achieved orally and through imitation. Story-telling passed knowledge,</p>
	</div>
</div>
<!--/welcome-->
<div class="welcome-grids">
	<div class="container">
		<div class="welcome-gridsinfo">
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-pencil"> </i>
			<h3>Good learning Environment</h3>
			<p>We are providing a good learning environment to the student by which they can put their full concentration in learning.</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-font"> </i>
			<h3>Friendly Staff</h3>
			<p>Our staffs are friendly by which if you have any query about our institute you can meet our staff and can console about the query which you have.</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-blackboard"> </i>
			<h3>Well managed room</h3>
			<p>The room in which student are kept for teaching are well managed. By which student concentration cann't be distract.</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-education"> </i>
			<h3>Expert Professor</h3>
			<p>We have expert professor who have good experience on this teaching field</p>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--effect-grid-->
<div class="effect-grid">
	<div class="container">
		<ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="images/a1.jpg" alt="img03">
						<figcaption>
							<h3>"The secret in education lies in respecting the student"</h3>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/a2.jpg" alt="img04">
						<figcaption>
							<h3>"The root of education are bitter, but the fruit is sweet"</h3>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/a3.jpg" alt="img01">
						<figcaption>
							<h3>"Gossip dies when it hits a wise person's ears"</h3>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/a4.jpg" alt="img02">
						<figcaption>
							<h3>"A teacher takes a hand, opens a mind and touches a heart"</h3>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/a5.jpg" alt="img06">
						<figcaption>
							<h3>"An investment in knowledge pays the best interest"</h3>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/a6.jpg" alt="img05">
						<figcaption>
							<h3>"Smart is something you become, not something you are"</h3>
						</figcaption>
					</figure>
				</li>
			</ul>
	</div>
</div>
<!--\effect-grid-->
<!--testmonials-->
<h3 align="center" style="color: black;"><b>Testimonials</h3></b>
<div class="slideshow-container">
           <?php
 $gettest=$user->GetAllTest();
       if($gettest){
        while ($result=$gettest->fetch_assoc()){
         ?>
<div class="mySlides">
<center><img src="User/<?php echo $result['image'];?>" alt="image" width="200px" height="100px" class="img-responsive zoom-img"></center>
 <p style="color:green;"><?php echo "<p>".$result["name"]."</p>";?></p>
  <q style="color:black;"><?php echo "<p>".$result["message"]."</p>";?> </q>
 
</div>
<?php
}
}
?>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!--testmonials-->
<!--specfication-->
<div class="news">
		<div class="container">
			<div class="news-text">
				<h3><b>Latest Events</b></h3>
			
			</div>

<?php
 $getevent=$admin->GetAllEvent();
       if($getevent){
        while ($result=$getevent->fetch_assoc()){
         ?>
         	

			<div class="news-grids">
			

				<div class="col-md-3 news-grid">


					<a href="#"><h4><?php echo "<p>".$result["eventname"]."</p>";?></h4></a>
					<span><p><b>Events Date: </b><?php echo $result["date"];?></p></span>
					<span><p><b>Events Time: </b><?php echo $result["time"];?></p></span>
				
					<div class="news-info">
						
					
						
					<a href="#" class="mask"><img src="admin/<?php echo $result['image'];?>" alt="image" width="200px" height="200px" class="img-responsive zoom-img"></a>
					<?php
					if($_SESSION['request_vars']['screen_name']){?>
                       <button class="btn" onclick="window.location.href='eventregistration.php?event_id=<?php echo $result['event_id'];?>'" >Join Events</button>
					<?php } 
					if($_SESSION['username']){?>
                       <button class="btn" onclick="window.location.href='eventregistration.php?event_id=<?php echo $result['event_id'];?>'" >Join Events</button>
					<?php } ?>
			
				   
					</div>

				</div>
				
				</div>

				<?php
}
}
?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!--/specfication-->
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
