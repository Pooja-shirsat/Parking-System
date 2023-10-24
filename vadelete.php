<?php
include"connect.php";
$w=$_GET['ID'];
$x="delete from regester_details where ID=$w";
$res=mysqli_query($con,$x);
if($res==true)
{
	echo "<script>alert('row deleted'); window.loaction.href='viewall.php';</script>" ;
	
}
?>