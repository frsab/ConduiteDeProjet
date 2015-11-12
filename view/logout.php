<?php 
		session_start();
		session_destroy();
		setcookie("nameproject",'',time()-3600);
		header("location:index.php");
 ?>