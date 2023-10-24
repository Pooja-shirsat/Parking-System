<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="viewall.css">
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

<div class="divScroll">
<div id="table-scroll">
<div style="height:200px overflow-y:scroll;">
<div class="header">
<table width="3000">
	<tr>
	<th >ID</th>
	<th >Username</th>
	<th > Phone_no</th>
	<th >Email</th>
	<th>DOB</th>
	<th>Address</th>
	<th>Vehicle_Owner_Name</th>
	<th>Vehicle_name</th>
	<th>Vehicle_number</th>
	<th>Password</th>
	<th>Edit</th>
	<th>delete</th>
	</tr>
<?php
include"Rmenubar.php";
echo"<br><h1 align='center'> Registered Users</h1><br>";
	include "connect.php";
	$insert="SELECT * FROM regester_details";
	$res=mysqli_query($con,$insert);
     while($row=mysqli_fetch_assoc($res))
	{
    echo "<tr>
	 <td> ".$row['ID']."</td>
	  <td> ".$row['Username']." </td>
	   <td> ". $row['Phone_no']."</td>
	    <td>". $row['Email']." </td>
		<td> ". $row['DOB']."</td>
		<td> ". $row['Address']."</td>
		<td> ". $row['Vehicle_Owner_Name']."</td>
		<td> ". $row['Vehicle_name']."</td>
		<td> ". $row['Vehicle_number']."</td>
		<td> ". $row['Password']."</td>
		<td><a href='update.php?ID=".$row['ID']."&un=".$row['Username']."&p=".$row['Phone_no']."&e=".$row['Email']."&a=".$row['Address']."&von=".$row['Vehicle_Owner_Name']."&vn=".$row['Vehicle_name']."&vnu=".$row['Vehicle_number']."'><input type='submit' name='edit' value='edit' class='btn'></a></td>
		<td><a href='vadelete.php?ID=".$row['ID']."'><input type='submit' name='delete' value='delete' class='btn'></a></td>
	 </tr>";
	}
	
?>	 
</div> 
</div>
</div>
</table>
</body>
</html>