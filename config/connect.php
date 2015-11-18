<?php 
		//$con=mysqli_connect("youssefjawharcom.ipagemysql.com","youjawhar","youjawhar","scrum_db");
		$con=mysqli_connect("localhost","root","","scrum_db");
		if(mysqli_connect_errno()){
			echo "Error occured while connecting with database".mysqli_connect_errno();
		}
		//session_start();	
 ?>