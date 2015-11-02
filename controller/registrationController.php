<?php 

include("connect.php");
include("functions.php");
if(logged_in()){
	header("location:profil.php");
	exit();
}
$error="";
if (isset($_POST['submit'])) {
	$nameproject=$_POST['nameproject'];
	$emailproject=$_POST['emailproject'];
	$passwordproject=$_POST['password'];
	$passwordprojectconfirm=$_POST['passwordConfirm'];

	$date=date("F,d Y");
	if(strlen($nameproject)<3){
		$error ="User name is too short.";
	}
	else if(strlen($passwordproject)<6){
		$error="Password must be longer than 8 characters.";
	}
	else if($passwordproject !== $passwordprojectconfirm){
		$error="Password does not match.";
	}

	else if(name_project_exists($nameproject,$con)){
		$error="User name already exists.";
	}
	else if(email_exists($emailproject,$con)){
		$error="Email already exists.";
	}



	else{
		$passwordproject = md5($passwordproject);

		$insertQuery="INSERT INTO projects(nameproject,emailproject,password,date)
		VALUES('$nameproject','$emailproject','$passwordproject','$date')";
		if(mysqli_query($con,$insertQuery)){

			$error="You are succefully registred.";
		}
	}
}
?>