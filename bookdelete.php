<?php
include"connect.php";
$x=$_GET['id'];
$slot_id=$_GET['id'];

$res=mysqli_query($con,"update blocks set Status='1' where id=".$slot_id."");

if($res==1)
{
	echo"<script>alert('Released successfully !!!..');window.location.href='viewbooking.php';</script>";
	
}
?>