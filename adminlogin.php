
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="adminlogin1.css">
<?php
 include 'mennubar.php';
 ?>
<center>
<div class="box">
<h1>Admin Login </h1><br>
</head>
<form method="POST">
<body>

<p style="font-size:120%; color:white; font-family:verdana; font-weight:bold;"><i class="fa-solid fa-user"></i> Username:</p><br>
<input type="text" name="name" id="Admin_id" style="font-size: 20px; color:white;font-family:verdana; font-weight:bold;"><br><br>

<p style="font-size:120%; color:white; font-family:verdana; font-weight:bold;"><i class="fa-solid fa-key"></i> Password:</p><br>
<input type="password" name="pass" id="pass_id" style="font-size: 20px; color:white;font-family:verdana; font-weight:bold;"><br><br>
 
<button type="="Submit" class="btn" name="login"onclick="myfun()">Log In   <i class="fa-solid fa-right-to-bracket"></i></button><br><br>
<a href="#" class="pass" style="font-size: 18px; color:aqua; font-family:verdana; font-weight:bold";>Forgot Password?</a>
</center>
</div>
</form>
<script>
function myfun(){
	window.open("adminhome.php");
}

</script>
</body>
