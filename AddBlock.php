

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="addblock.css">
	<title>addblock</title>
</head>
<body> 
<?php
						include"Rmenubar.php"
						?>  
	<form method="POST" align="center">
	<br>
	<br>
	<br>
						<div class="box">
						<br>
						<h2>Add New Block</h2>
						<br>
				
									<label style="font-family:Verdana; color:yellow; font-size:20px; font-weight:bold;">Block Category</label>
						<br>
									
									<select style="font-size: 18px; font-family:verdana; font-weight:bold; border-color: black; width:300px; height:50px; border-radius: 15px 0 15px 0; margin-bottom:15px; display:inline-block;" class="form-control" placeholder="Enter Block Category.." id="catename" name="category" required>>
									<option>  A </option>
									<option>  B </option>
									<option>  C </option>
									</select>
								 <br>
								 <br>
									
								<label style="font-family:Verdana; color:yellow; font-size:20px; font-weight:bold;">Block Name</label>
									<select style="font-size: 18px; font-family:verdana; font-weight:bold; border-color: black; width:300px; height:50px; border-radius: 15px 0 15px 0; margin-bottom:15px; display:inline-block;" class="form-control" placeholder="Enter block name.." id="catename" name="blockname" required>>
									<option>  Slot 1 </option>
									<option>  Slot 2 </option>
									<option>  Slot 3 </option>
									</select>
								<br>
								<br>
								
								<button type="submit" class="btn btn-success" name="submit" onclicl="myfun()">Submit</button>&nbsp;
									<button type="reset" class="btn btn-default">Reset</button> 
						</div>
						<style>
body
{
	
	background-image:url('block.jpeg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
}
</form>	
<script>
function myfun(){
	window.open("Dashboard.php");
}
</script>	
</body>
</html>
<?php 

error_reporting(0);
include"Rmenubar.php";
include "connect.php";
	if(isset($_POST['submit']))
	{
		$ab=$_POST['id'];
		//$cd=$_POST['date'];
		$ef=$_POST['category'];
		$gh=$_POST['blockname'];
	$ij="insert into blocks(id, category, blockname,Status) VALUES ('$ab','$ef','$gh','1')";
//$ij="insert into blocks(id,category,blockname) values ( '$ab','$ef','$gh')";
    echo $ij;
	$res=mysqli_query($con,$ij);
     if($res==true)
	 {
		echo"<script>alert('Successfully added');</script>";
	 }
	else
	{
		echo"not successful";
	}
	}
	//<link rel="stylesheet" href="RegistrationStyle.css">	
		
?>

