
<!DOCTYPE html>
<html>
<head> 
<title>Login Form</title>
<?php
include"mennubar.php"
?>
<link rel="stylesheet" href="LoginStyle1.css">
</head>
<body>
	<button type="Submit" class="btn"  name="Admin Login" onclick="myfun1()">Admin Login</button>
<div class="box">
 
<center>
<table>
<br>
<h1> Login</h1>
<br>
<form method=POST>

<tr>
<td>Username :</td>
<td>
<input type="text" placeholder="Username" name="uname" style="font-size: 18px" > 
</td>
</tr>

<tr>
<td>&nbsp</td>
<td>
&nbsp
</td>
</tr>

<tr>
<td>Password :</td>
<td>
<input type="password" placeholder="password" name="password" style="font-size: 18px">
</td>
</tr>
</table>
</center>
<br>
<br>
<center>
<button type="Submit" class="btn"  name="login" onclick="myfun()">Log In</button>  
<br>
<br>
<label><input type="checkbox" checked="checked" name="remember" class="lc">Remember me</label>
<br>
<br>
</center>
<br>
<center>
<a href="#" class="pass" style="font-size: 18px; color:blue font-family:calibri;";>Forgot Password?</a>
</center>
</div>
<style>
body
{
	
	background-image:url('37.jpg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
input.lc {
width:18px;
height:18px;
}
</style>

</form>
<script>
function myfun(){
	
	window.open("userhomepage.php");
}
function myfun1(){
	
	window.open("Adminlogin.php");
}

</script>
</body>
</html>
