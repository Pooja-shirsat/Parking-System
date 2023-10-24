

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="addblock.css">
	<title>addblock</title>
</head>
<body>   
	<form method="POST" align="center">
	<br>
	<br>
	<br>
						<div class="box">
						<h2>Add New Block</h2>
						<br>
				
									<label style="font-family:Verdana; font-size:20px; font-weight:bold;">Block Category</label>
									<input type="text"  style="font-size: 18px; color:black ;font-family:verdana; font-weight:bold;" class="form-control" placeholder="Enter Block Category.." id="catename" name="category" required>
								 <br>
								 <br>
									
								<label style="font-family:Verdana; font-size:20px; font-weight:bold;">Block Name</label>
									<input type="text" style="font-size: 18px; color:black ;font-family:verdana; font-weight:bold;" class="form-control" placeholder="Enter Block Name .." id="Slot no" name="blockname" required>
								<br>
								<br>
								
								<button type="submit" class="btn btn-success" name="submit">Submit</button>&nbsp;
									<button type="reset" class="btn btn-default">Reset</button> 
						</div>
						<style>
body
{
	
	background-image:url('shahid07.jpeg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
}
</form>		
</body>
</html>
<?php 
include "connect.php";
	if(isset($_POST['submit']))
	{
		$ab=$_POST['id'];
		//$cd=$_POST['date'];
		$ef=$_POST['category'];
		$gh=$_POST['blockname'];
	$ij="insert into blocks(id, category, blockname) VALUES ('$ab','$ef','$gh')";
//$ij="insert into blocks(id,category,blockname) values ( '$ab','$ef','$gh')";
    echo $ij;
	$res=mysqli_query($con,$ij);
     if($res==true)
	 {
		echo"successful";
	 }
	else
	{
		echo"not successful";
	}
	}
	//<link rel="stylesheet" href="RegistrationStyle.css">	
		
?>

