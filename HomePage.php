<!DOCTYPE html>
<html>
<head> 
<title>Home Page</title>
<link rel="stylesheet" href="hpstyle.css">
<script src="https://kit.fontawesome.com/a14e4a0231.js" crossorigin="anonymous"></script>
</head>
<body>
<form>
<center>
<h1> Parking Management System</h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<button type="submit" class="btn2" onclick="myfunc2()"><i class="fa-solid fa-address-card"></i> Register</button>&nbsp &nbsp &nbsp
<button type="submit" class="btn3" onclick="myfunc3()"><i class="fa-solid fa-right-to-bracket"></i> Login</button><br><br>
<button type="submit" class="btn4" onclick="myfunc4()" value="About Us"><i class="fa-solid fa-circle-info"></i> About us</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<button type="submit" class="btn5" onclick="myfunc5()"><i class="fa-solid fa-phone"></i> Contact</button><br><br>
</center>
</div>
<br>


<footer>

<marquee style="color:white; font-size:20px; font-family:Verdana" class="marquee" bgcolor="black" behavior="alternate">Designed by: Pooja Shirsat, Sakshi Wagh, Shraddha Sathe, Samruddhi Harishchandre,Suryawanshi Pranjal</marque>

</footer>
<style>
body
{
	background-image:url('shahid.jpg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>

</form>
<script>
function myfunc2(){
	window.open("RegistrationForm.php");
}
function myfunc3(){
	window.open("LoginForm.php");
}
function myfunc4(){
	window.open("Aboutus1.php");
}
function myfunc5(){
	window.open("Contactus1.php");
}

</script>
</body>
</html>