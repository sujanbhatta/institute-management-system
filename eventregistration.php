<?php
session_start();
error_reporting(0);
include "admin/class/AdminClass.php";
$username = $_SESSION['username'];
$screen_name = $_SESSION['request_vars']['screen_name'];
$jevent = new AdminClass(); // Checking for user logged in or not
$id=$_GET['event_id'];


if ($screen_name==true)
{
	$loginname = $_SESSION['request_vars']['screen_name'];
} 
if ($username==true)
{
	$loginname=$_SESSION['username'];
}

 if (isset($_REQUEST['submit'])){

 extract($_REQUEST);

 $register = $jevent->joinevent($eventname,$firstname,$lastname,$email,$phone,$loginname);
if($register)
  {
echo "<script>alert('You have successfully joined event')</script>";
echo "<script> window.location.href='index.php';</script>";
  }
  else
  {
echo "<script>alert('Falied while joining event')</script>";
  }
}
      

?>
<!doctype html>
<html>

<head>
	<title>Event Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Registration Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="eventcss/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body>

	<div class="content-agileits">
		<h1 class="title">Event Registration Form</h1>
		<div class="left">
		 <?php 
$getall=$jevent->GetJoinEventById($id);
if($getall){
  while ($result=$getall->fetch_assoc()){
    ?>
			<form name="form1" action="eventregistration.php" method="POST" data-toggle="validator">
				<div class="form-group">
					<label for="eventname" class="control-label">Event Name:</label>
					<input type="text" readonly="readonly" class="form-control" id="eventname" value="<?php echo $result['eventname']; ?>" name="eventname">
					<div class="help-block with-errors"></div>
				</div>
				
				<div class="form-group">
					<label for="firstname" class="control-label">First Name:</label>
					<input type="text" class="form-control" id="firstname" placeholder="First Name" data-error="Enter Your First Name" name="firstname" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="lastname" class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastname" placeholder="Last Name" data-error="Enter Your Last Name" name="lastname" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Email" data-error="This email address is invalid" name="email" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="phone" class="control-label">Phone:</label>
					<input type="text" class="form-control" id="phone" placeholder="Phone" data-error="Enter Your Phone Number" name="phone" required>
					<div class="help-block with-errors"></div>
				</div>
				
			
				<div class="form-group">
					<button type="submit" class="btn btn-lg" name="submit">submit</button>
				</div>
			</form>
			
		</div>
		<div class="right">
			<img src="admin/<?php echo $result['image'];?>">
			<div class="details">
			<label style="color:red;">Event Name:</label>
			<p><?php echo $result['eventname'];?></p><hr>
		      <label style="color:red;">Description</label>
			<p><?php echo $result['description'];?></p><hr>
			<label style="color: red;">Date</label>
			<p><?php echo $result['date'];?></p><hr>
			<label style="color:red;" >Time</label>
			<p><?php echo $result['time'];?></p><hr>
			</div>
		</div><?php
			}
		}?>
		<div class="clear"></div>
	</div>
	<p class="copyright-w3ls">© 2018 Event Registration Form. All Rights Reserved 
		
	</p>
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.min.js"></script>
	<!-- /js files -->
</body>

</html>
