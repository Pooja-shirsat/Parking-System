<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="viewall.css">
<style>
<!--.divScroll{
	overflow:scroll;
	height:250px
	weight:350px;
}
#table-scroll{
	height:560px;
	overflow:auto;
	margin-top:20px;
}-->
</style>
</head>
<body>
<!--<h1 align="center">View All Bookings</h1>-->

<!--<div class="divScroll">-->
<!--<div id="table-scroll">-->
<div style="height:200px overflow-y:scroll;">
<div class="header">
<center>
<table width="1250">
	<tr>
	<th >id</th>
	<th>Vehicle_Owner_Name</th>
	<th> Vehicle_Number</th>
	<th>Date</th>
	<th>Vehicle_In</th>
	<th>Vehicle_Out</th>
	<th>slot_id</th>
	<th>Release</th>
	<th>Print</th>
	</tr>
<?php
	include"Rmenubar.php";
	echo"<br><center><h1>Booking Details<h1><br></center>";
	include"connect.php";
	//error_reporting(0);
	$insert="SELECT * FROM booking_details";
	//echo "$insert";
	$result=mysqli_query($con,$insert);
     while($row=mysqli_fetch_assoc($result))
	{
    echo "<tr>
	 <td> ".$row['id']."</td>
	  <td> ".$row['Vehicle_Owner_Name']." </td>
	   <td> ". $row['Vehicle_Number']."</td>
	    <td>". $row['Date']." </td>
		<td> ". $row['Vehicle_In']."</td>
		<td> ". $row['Vehicle_Out']."</td>
		<td> ". $row['slot_id']."</td>
		<td><a href='bookdelete.php?id=".$row['slot_id']."'><input type='submit' name='Release' value='Release' class='btn'></a></td>
		<td><a href='bookingreciept.php?id=".$row['id']."'><input type='submit' name='Print' value='Print' class='btn'></a></td>
	</tr>";
	}
	//<link rel="stylesheet" href="booking.css">
	//<td><a href='update.php?id=".$row['ID']."'><input type='submit' name='edit' value='edit'></a></td>
	//<th bgcolor="green">Approve</th>
?>	 

</div> 
</div>
</div>
</table>
</center>
</body>
</html>