<!DOCTYPE html>
<html>
<head> 
<title>Registeration Form</title>
<link rel="stylesheet" href="RegistrationStyle1.css">
<?php
 include 'mennubar.php';
 ?>
</head>
<body>
<div class="box">

<center>
<table>
<br>
<h1> Registration</h1>
<br>
<form method="POST">
<tr>
<td>Username :</td>
<td>
<input type="text" placeholder="Username" name="Username" style="font-size: 18px" >
</td>
</tr>


<tr>
<td>Phone no :</td>
<td>
<input type="number" placeholder="9822****" name="Phone_no" maxlength="10"/ style="font-size: 18px">
</td>
</tr>



<tr>
<td>Email :</td>
<td>
<input type="mail" placeholder="Email" name="Email" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Date Of Birth :</td>
<td>
<input type="date" style="font-size: 18px" name="DOB">
</td>
</tr>


<tr>
<td>Gender :</td>
<td>
<input type="radio"  name="gender">Male
<input type="radio"  name="gender">Female
</td>
</tr>

<tr>
<td>Address :</td>
<td>
<textarea id = "address" rows="2" cols="50" style="font-size: 18px" name="Address">
</textarea>
</td>
</tr>

<tr>
<td>Vehicle Owner Name :</td>
<td>
<input type="text" placeholder="Owner's Name" name="Vehicle_Owner_Name" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Name :</td>
<td>
<input type="text" placeholder="Vehicle Name" name="Vehicle_name" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Number :</td>
<td>
<input type="text" placeholder="Vehicle Number" name="Vehicle_number" style="font-size: 18px">
</td>
</tr>

<tr>
<td>Vehicle Type :</td>
<td>
<input type="radio"  name="Type">Two Wheeler
<input type="radio"  name="Type">Three Wheeler
<input type="radio"  name="Type">Four Wheeler
</td>
</tr>

<tr>
<td>Password :</td>
<td>
<input type="password" placeholder="password" name="Password" style="font-size: 18px">
</td>
</tr>
</table>
</center>
<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button type="Reset" class="btn" value="Reset"><i class="fa-solid fa-arrow-rotate-right"></i>Reset</button> &nbsp;
<button type="submit" class="btn2" name="Register" onclick="myfun()"><i class="fa-solid fa-right-to-bracket"></i> Register</button>&nbsp 
<button type="I've an account" class="btn" onclick="click()"><i class="fa-solid fa-user"></i> I've an account</button>
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
<script>
function myfun()
{
	alert("Registration Successful ......");
	window.open("HomePage.php")
}
	function click(){
		window.open("LoginForm.php");
	}
</script>
</form>
</body>
</html>

<?php 
include "connect.php";
error_reporting(0);
	if(isset($_POST['Register']))
	{
		//$l=$_POST['ID'];
		$a=$_POST['Username'];
		$b=$_POST['Phone_no'];
		$c=$_POST['Email'];
		$d=$_POST['DOB'];
		//$e=$_POST['gender'];
		$f=$_POST['Address'];
		$g=$_POST['Vehicle_Owner_Name'];
		$h=$_POST['Vehicle_name'];
		$i=$_POST['Vehicle_number'];
		//$j=$_POST['Type'];
		$k=md5($_POST['Password']);

$q="insert into regester_details(Username,Phone_no,Email,DOB,Address,Vehicle_Owner_Name,Vehicle_name,Vehicle_number,Password) values ( '$a','$b','$c','$d','$f','$g','$h','$i','$k')";
   // echo "$q";
	$res=mysqli_query($con,$q);
     if($res==true)
	 {
		echo"successful";
	 }
	else
	{
		echo"not successful";
	}
	}
	//<link rel="stylesheet" href="RegistrationStyle.css">
?>