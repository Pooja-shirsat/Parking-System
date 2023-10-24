
<?php 
include"Rmenubar.php";
include "connect.php";
error_reporting(0);
	if(isset($_POST['book']))
	{
		$id=$_POST['id'];
		$Vehicle_Owner_Name=$_POST['Vehicle_Owner_Name'];
		$Vehicle_Number=$_POST['Vehicle_Number'];
		$Date=$_POST['Date'];
		$Vehicle_In=$_POST['Vehicle_In'];
		$Vehicle_Out=$_POST['Vehicle_Out'];
		$slot_id=$_GET['id'];
$ghi="INSERT INTO booking_details(id, Vehicle_Owner_Name, Vehicle_Number, Date, Vehicle_In, Vehicle_Out,slot_id) VALUES ('$id','$Vehicle_Owner_Name','$Vehicle_Number','$Date','$Vehicle_In','$Vehicle_Out','$slot_id')";
//$ghi="insert into booking_details(Vehicle_Owner_Name,Vehicle_Number,Date,Vehicle_In,Vehicle_Out) values ('$Vehicle_Owner_Name','$Vehicle_Number','$Date','$Vehicle_In','$Vehicle_Out')";
    //echo "$ghi";
	
	mysqli_query($con,"update blocks set Status='0' where id=".$slot_id."");
	$result=mysqli_query($con,$ghi);
     if($result==true)
	 {
		 
		echo"<script>alert('successful');window.location.href='Dashboard.php';</script>";
		
	 }
	else
	{
		echo"not successful";
	}
	}	
	//<link rel="stylesheet" href="RegistrationStyle.css">

	 //<link rel="stylesheet" href="booking.css">
	 
?>
<!DOCTYPE html>
<html>
<head> 
<br>
<br>
<br>
<title>Booking</title>
<link rel="stylesheet" href="Booking1.css">
</head>
<body>
<div class="box">

<center>
<table>
<br>
<h1> Booking</h1>
<br>
<form method="POST">
<tr>
        <td style="font-family:verdana; font-size:20px; font-weight:bold; color:red;">Vehicle Owner Name :</td>
        <td>
        <input type="text" placeholder="Vehicle Owner Name" name="Vehicle_Owner_Name" style="font-size: 18px; color:red;" > 
        </td>
        </tr>
        
        <tr>
        <td>&nbsp;</td>
        <td>
        &nbsp;
        </td>
        </tr>
        
        <tr style="font-family:verdana; font-size:20px; font-weight:bold; color:red;">
        <td>Vehicle Number :</td>
        <td>
        <input type="text" placeholder="Vehicle Number" name="Vehicle_Number" style="font-size: 18px; color:red;">
        </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>
            &nbsp;
            </td>
            </tr>
            
            <tr>
            <td style="font-family:verdana; font-size:20px; font-weight:bold; color:red;">Date :</td>
            <td>
            <input type="date" placeholder="" name="Date" style="font-size: 18px; color:red;">
            </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>
                &nbsp;
                </td>
                </tr>
                
                <tr>
                <td style="font-family:verdana; font-size:20px; font-weight:bold; color:red;">Vehicle In :</td>
                <td>
                <input type="time" placeholder="" name="Vehicle_In" style="font-size: 18px; color:red;">
                </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>
                    &nbsp;
                    </td>
                    </tr>
                    
                    <tr>
                    <td style="font-family:verdana; font-size:20px; font-weight:bold; color:red;">Vehicle Out :</td>
                    <td>
                    <input type="time" placeholder="" name="Vehicle_Out" style="font-size: 18px; color:red">
                    </td>
                    </tr>
        </table>
        <br>
        
        
        <button type="Submit" class="btn" name="book">BOOK</button>  &nbsp;

</div>
<style>
body
{
	
	background-image:url('booking1.jpg');
	background-atttachment:fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
input.lc {
width:18px;
height:18px;
}
</style>

</form>
</body>
</html>
