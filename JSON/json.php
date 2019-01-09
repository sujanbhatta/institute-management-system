<?php 
include ('../admin/class/config.php');
$sql="SELECT * FROM event";
$result=mysqli_query($link,$sql);
$i=0;
while ($row=mysqli_fetch_array($result))
{
	$response[$i]['eventname']=$row['eventname'];
	$response[$i]['description'] =$row['description'];
	$response[$i]['date']=$row['date'];

	$data['posts'][$i]=$response[$i];
	$i=$i+1;
}
$json_string=json_encode($data['posts']);
$file='jsonencode.json';
file_put_contents($file, $json_string);
@header('LOCATION:eventtbl.php');