<?php 
		$mysql_hostname = "youssefjawharcom.ipagemysql.com";
		$mysql_user = "alaulan";
		$mysql_password = "alaulandtb";
		$mysql_database = "registration";
		$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die ("Error occured while connecting with database");
		//mysqli_select_db($mysql_database, $con) or die ("Error occured while connecting with database");
		if(mysqli_connect_errno()){
		 	echo "Error occured while connecting to database".mysqli_connect_errno();
		 }
 ?>