<?php 
		$con=mysqli_connect("localhost","root","","registration");
		if(mysqli_connect_errno())
			echo "Eroor occured while connecting with database".mysqli_connect_errno();
 ?>