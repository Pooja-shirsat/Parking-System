
<?php
session_start();
//echo "Welcome ".$_SESSION['uname'];
$userlog=$_SESSION['uname'];
if($userlog == true)
{

}
else{
       header('location:LoginForm.php');
}
include"connect.php";
error_reporting(0);
$id=$_GET['id'];
$query="SELECT * FROM `booking_details` WHERE id='$id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Reciept</title>
<link rel="stylesheet" href="bookingreciept.css">
</head>
<body>

    
<div class="box">
<center>
       <header style="background-color: WhiteSmoke;"><h2>VPMS</h2></header>
      
    
    </center>
    
		
        <table>
		<tr class="service">
							<tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp Slot No :<?php echo $result['slot_id'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"> <style="border-color:transparent;"></p></strong></td>
							<tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp Name :<?php echo $result['Vehicle_Owner_Name'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"> <style="border-color:transparent;"></p></strong></td>
							<tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp Vehicle Number :<?php echo $result['Vehicle_Number'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"> <style="border-color:transparent;"></p></strong></td>

            <tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp Date :<?php echo $result['Date'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"><style="border-color:transparent;"></p></strong></td>
            
                   <tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp  Vehicle In :<?php echo $result['Vehicle_In'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"><style="border-color:transparent;"></p></strong></td>
							<tr class="service">
                   <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp &nbsp Vehicle Out :<?php echo $result['Vehicle_Out'];?></p></strong></td>
                  <td class="tableitem"><strong><p class="itemtext"><style="border-color:transparent;"></p></strong></td>
           
            
            
							<tr class="service">
                <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp &nbsp &nbsp Bill</p></strong></td>
                <td class="tableitem"><strong><p class="itemtext"><input type="text" style="border-color:transparent;"></p></strong></td>
								
							<tr class="service">
                <td class="tableitem"><strong><p class="itemtext">&nbsp &nbsp &nbsp &nbsp Paid Status :</p></strong></td>
								<td class="tableitem"><strong><p class="itemtext"><input type="text" value="200" style="border-color:transparent;"></p></strong></td>
                                   <tr>
                                          <td>
                                                 <input type="button" name="Print" value="Print" onclick="window.print()">
                                          </td>
                                   </tr>
						</table>
					

					
						<p class="legal"><strong>&nbsp &nbsp &nbsp &nbsp Thank you for coming. Visit Again!!!</strong>  
						</p>
					
  </body>
  </html>