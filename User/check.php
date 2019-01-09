
<?php  
//check.php  
$connect = mysqli_connect("localhost", "root", "", "login"); 
if(isset($_POST["email"]))
{
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "SELECT * FROM registration WHERE email = '".$email."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
if(isset($_POST["contact"]))
{
 $contact = mysqli_real_escape_string($connect, $_POST["contact"]);
 $query = "SELECT * FROM registration WHERE contact = '".$contact."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>