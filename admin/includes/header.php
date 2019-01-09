<?php 
error_reporting(0);
include_once 'class/AdminClass.php';
$obj = new AdminClass();

if(!isset($_SESSION["admin"])){

 header("Location:login.php");
}
else
{
    
      if (isset($_GET['logout'])) {
          $get=$_GET['logout'];
  
          $logout=$obj->Logout($username);
      }
?>
<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 25px; font-family: cooper; color: white;">Admin Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>

		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><label style="font-family: cambria;font-size: 14px;">Welcome:: <?php echo $_SESSION['admin'];?></label> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="view_profile.php">View Profile</a></li>
					<li><a href="?logout=<?php echo $_SESSION['admin'];?>">Logout</a></li>

				</ul>
			</li>
		</ul>
	</div>
	<?php 
}
?>
	