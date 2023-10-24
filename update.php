
<?php
	include"connect.php";
    $un= $_GET['un'];
	$p= $_GET['p'];
	$e= $_GET['e'];
	$a= $_GET['a'];
	$von= $_GET['von'];
	$vn= $_GET['vn'];
	$vnu= $_GET['vnu'];
?>

<!DOCTYPE html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<html>
<head> 
<title>Update</title>
<link rel="stylesheet" href="RegistrationStyle.css">
</head>
<body>
<div class="box">

<center>
<table>
<br>
<br>
<br>
<br>
<h1> Registration</h1>

<form method="POST">
<tr>
<td>Username :</td>
<td>
<input type="text" value="<?php echo "$un";?>" placeholder="Username" name="Username" style="font-size: 18px" >
</td>
</tr>


<tr>
<td>Phone no :</td>
<td>
<input type="number" value="<?php echo "$p";?>" placeholder="9822****" name="Phone_no" maxlength="10"/ style="font-size: 18px">
</td>
</tr>



<tr>
<td>Email :</td>
<td>
<input type="mail" value="<?php echo "$e";?>" placeholder="Email" name="Email" style="font-size: 18px">
</td>
</tr>


<tr>
<td>Address :</td>
<td>
<input type="text" value="<?php echo "$a";?>" placeholder="Address" name="Address" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Owner Name :</td>
<td>
<input type="text" value="<?php echo "$von";?>" placeholder="Owner's Name" name="Vehicle_Owner_Name" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Name :</td>
<td>
<input type="text" value="<?php echo "$vn";?>" placeholder="Vehicle Name" name="Vehicle_name" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Number :</td>
<td>
<input type="text" value="<?php echo "$vnu";?>" placeholder="Vehicle Number" name="Vehicle_number" style="font-size: 18px">
</td>
</tr>
</table>
</center>
<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;

<button type="submit" class="btn2" name="regester"> Update Details</button>&nbsp 
</div>
<style>
body
{
	background-image:url('22.jpg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>

</form>
</body>
</html>

<?php 
include "connect.php";
//error_reporting(0);
	if(isset($_POST['regester']))
	{
		//$id=$_POST['ID'];
		$a=$_POST['Username'];
		$b=$_POST['Phone_no'];
		$c=$_POST['Email'];
		$f=$_POST['Address'];
		$g=$_POST['Vehicle_Owner_Name'];
		$h=$_POST['Vehicle_name'];
		$i=$_POST['Vehicle_number'];

$q= "update regester_details set Username='$a',Phone_no='$b',Email='$c',Address='$f',Vehicle_Owner_Name='$g',Vehicle_name='$h',Vehicle_number='$i' where ID=".$_GET['ID']."";
   //echo "$q";
	$res=mysqli_query($con,$q);
     if($res==true)
	 {
		echo"<script>alert('successful');window.location.href='viewall.php';</script>";
	 }
	else
	{
		echo"not successful";
	}
	}
	//<link rel="stylesheet" href="RegistrationStyle.css">
?>