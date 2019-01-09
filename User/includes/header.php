<?php 
error_reporting(0);
session_start();
include_once 'class/UserClass.php';
$obj = new UserClass();

if(!isset($_SESSION['username']))
{
	header("LOCATION:../index.php");
}
else
{
	
      if (isset($_GET['logout'])) {
          $get=$_GET['logout'];
  
          $logout=$obj->Logout($username);
      }
?>
<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 25px; font-family: cooper; color: white;">User Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>

		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><label style="font-family: cambria;font-size: 14px;">Welcome:: <?php echo $_SESSION['username'];?></label> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="view_profile.php">View Profile</a></li>
					<li><a href="?logout=<?php echo $_SESSION['username'];?>">Logout</a></li>

				</ul>
			</li>
		</ul>
	</div>
	<?php 
}
?>
	