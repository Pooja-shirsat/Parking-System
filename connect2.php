<?php
	$ans=mysqli_connect("localhost","root","","admindata");
	if(!$ans)
	{
			echo "not connect";
	}
		else
		{
		echo "connect";
		}
?>