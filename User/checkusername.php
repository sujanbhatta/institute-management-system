<?php

include "class/config.php";

/* Get username */
$username = $_POST['username'];

/* Query */
$query = "select count(*) as cntUser from registration where username='".$username."'";

$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

echo $count;


?>