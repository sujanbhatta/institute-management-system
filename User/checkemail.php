<?php

include "class/config.php";


/* Get email */
$email = $_POST['email'];

/* Query */
$query = "select count(*) as cntEmail from registration where email='".$email."'";

$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntEmail'];

echo $count;
?>