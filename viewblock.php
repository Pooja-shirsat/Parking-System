<?php
session_start();
?>
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
<table width="1230">
	<tr>
	<th>ID</th>
	<th>category</th>
	<th> blockname</th>
	<th> Status</th>
	</tr>
<?php

echo"<br><h1 align='center'>View all Blocks</h1><br>";
	include "connect.php";
	$insert="SELECT * FROM blocks";
	$res=mysqli_query($con,$insert);
     while($row=mysqli_fetch_assoc($res))
	{
    echo "<tr>
	 <td> ".$row['id']."</td>
	  <td> ".$row['category']." </td>
	   <td> ". $row['blockname']."</td>
	    <td> ". $row['Status']."</td>
	 
</tr>";
	}
	
?>	 
</div> 
</div>
</div>
</table>
</body>
</html>