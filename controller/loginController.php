<?php 
include("connect.php");
include("functions.php");
if(logged_in()){
	header("location:../view/projectlist.php");
	exit();
}
$error="";
if (isset($_POST['submit'])) {
	$nameproject=$_POST['nameproject'];
	$passwordproject=$_POST['password'];
	$checkBox=isset($_POST['keep']);
	if(name_project_exists($nameproject,$con)){
		$result=mysqli_query($con,"SELECT password FROM projects WHERE nameproject='$nameproject'");
		$retrievepassword=mysqli_fetch_assoc($result);

		if(md5($passwordproject) !== $retrievepassword['password']){
			$error ="Password is incorrect";
		}
		else{
			$_SESSION['nameproject'] =$nameproject;
			if($checkBox =="on"){
				setcookie("nameproject",$nameproject,time()+3600);
			}
			header("location:../view/projectlist.php");
		}

	}		
	else{
		$error="This user name does not exists.";
	}
}
?>