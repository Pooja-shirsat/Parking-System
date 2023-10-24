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
<h1 align="center">View All Bookings</h1>
<link rel="stylesheet" href="booking.css">
<div class="divScroll">
<div id="table-scroll">
<div style="height:200px overflow-y:scroll;">
<table align="center" border="5px" width="1200px"  bordercolor="black" bgcolor="red">
	<tr>
	<th bgcolor="orange">id</th>
	<th bgcolor="orange">Vehicle_Owner_Name</th>
	<th bgcolor="orange"> Vehicle_Number</th>
	<th bgcolor="orange">Date</th>
	<th bgcolor="orange">Vehicle_In</th>
	<th bgcolor="orange">Vehicle_Out</th>
	<th bgcolor="orange">slot_id</th>
	</tr>
<?php
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
	</tr>";
	}
	//<link rel="stylesheet" href="booking.css">
	//<td><a href='update.php?id=".$row['ID']."'><input type='submit' name='edit' value='edit'></a></td>
	//<th bgcolor="green">Approve</th>
?>	 
</div> 
</div>
</table>
</body>
</html>