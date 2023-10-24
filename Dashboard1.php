
<!DOCTYPE html>
<html>
<head>
<title>blocks</title>
<link rel="stylesheet" href="dashboard1.css">
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

<?php
include"mennubar.php";
echo"<br><h1 align='center'>Book Slots</h1>";
error_reporting(0);
//include"menu.php";
	include "connect.php";

	date_default_timezone_get('Asian/Kolkata');
	$t=time();
	$dis="select * from booking_details";
	$Vehicle_In=$_POST['Vehicle_In'];
	$Vehicle_Out=$_POST['Vehicle_Out'];

	$a="select * from blocks where category='A'";
    $b="select * from blocks where category='B'";
	$c="select * from blocks where category='c'";
	
	$res1=mysqli_query($con,$a);
	$res2=mysqli_query($con,$b);
	$res3=mysqli_query($con,$c);
	
	
	
    echo"<label>Block A</label>";
	echo "<br>";
	  while($row=mysqli_fetch_assoc($res1))
	{ 
	
  ?>
	   <a href="Booking.php?id=<?php echo $row['id']; ?>"><input type='submit' class='btn' value='<?php echo $row['blockname']; ?>' style="<?php if($row['Status']==0) { echo "background-color:red;"; } else { echo "background-color:59E817;"; }  ?> " 
	   <?php if($row['Status']==0) { echo "disabled"; } ?> ></a> &nbsp;
	<?php 
       
	} echo"<br><br>";
	echo"<label>Block B</label>";
	echo "<br>";
	  while($row2=mysqli_fetch_assoc($res2))
	{ 
	
  ?>
	   <a href="Booking.php?id=<?php echo $row2['id']; ?>"><input type='submit' class='btn' value='<?php echo $row2['blockname']; ?>' style="<?php if($row2['Status']==0) { echo "background-color:red;"; } else { echo "background-color:59E817;"; }  ?> " 
	   <?php if($row2['Status']==0) { echo "disabled"; } ?> ></a> &nbsp;
	<?php 
       
	}echo"<br><br>";
	
	echo"<label>Block C</label>";
	echo "<br>";
	  while($row3=mysqli_fetch_assoc($res3))
	{ 
	
  ?>
	   <a href="Booking.php?id=<?php echo $row3['id']; ?>"><input type='submit' class='btn' value='<?php echo $row3['blockname']; ?>' style="<?php if($row3['Status']==0) { echo "background-color:red;"; } else { echo "background-color:59E817;"; }  ?> " 
	   <?php if($row3['Status']==0) { echo "disabled"; } ?> ></a> &nbsp;

<?php	  
	}
	
?>	 
</div> 
</div>
</table>
</body>
</html>