<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.divScroll{
	overflow:scroll;
	height:250px
	weight:350px;
}
#table-scroll{
	height:560px;
	overflow:auto;
	margin-top:20px;
}
</style>
</head>
<body>
<h1 align="center">View all Blocks</h1>

<?php
error_reporting(0);
	include "connect.php";
	
	
	$a="select * from blocks where category='A'";
    $b="select * from blocks where category='B'";
	$c="select * from blocks where category='c'";
	$res1=mysqli_query($con,$a);
	$res2=mysqli_query($con,$b);
	$res3=mysqli_query($con,$c);
	echo"<h1>Block A</h1>";
	echo "<br>";
	  while($row=mysqli_fetch_assoc($res1))
	{ 

 echo "<input type='submit' value='$row[blockname]'>&nbsp ";
       
	} echo"<br><br>";
	echo"Block B";
	echo "<br>";
	while($row2=mysqli_fetch_assoc($res2))
	{ 
	
       echo "<input type='submit' value='$row2[blockname]' style='font-size:16px; font-family:verdana; color:green> &nbsp";
  
	} echo"<br><br>";
	echo"Block C";
	echo "<br>";
     while($row3=mysqli_fetch_assoc($res3))
	{ 
       echo "<input type='submit' value='$row3[blockname]'>&nbsp";
       
	}
	
?>	 
</div> 
</div>
</table>
</body>
</html>