<?php 
	
	include("connect.php");


	include("functions.php");
		if(logged_in()){
		header("location:profil.php");
		exit();
	}
	$error="";
	if (isset($_POST['submit'])) {
		$nameproject=mysql_real_escape_string($_POST['nameproject']);
		$emailproject=mysql_real_escape_string($_POST['emailproject']);
		$passwordproject=$_POST['password'];
		$passwordprojectconfirm=$_POST['passwordConfirm'];
		
		$date=date("F,d Y");
		if(strlen($nameproject)<3){
			$error ="Name of Project is too short";
		}
		else if(strlen($passwordproject)<6){
			$error="Password must be greater than 8 characters";
		}
		else if($passwordproject !== $passwordprojectconfirm){
			$error="Password does not match";
		}
		
		else if(name_project_exists($nameproject,$con)){
			$error="Project name Exists";
		}
		else if(email_exists($emailproject,$con)){
			$error="email Exists";
		}

		

		else{
			$passwordproject = md5($passwordproject);
			
			$insertQuery="INSERT INTO projects(nameproject,emailproject,password,date)  
			VALUES('$nameproject','$emailproject','$passwordproject','$date')";
			if(mysqli_query($con,$insertQuery)){
				
					$error="You are succefully registred";
				}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/styles.css" class="rel">
</head>
<body>
	<div id="error"><?php echo $error ?></div>
	<div id="wrapper">
		<div id="menu">
			<a href="index.php">Sign Up</a>
			<a href="login.php">Login</a>
		</div>
		<div id="formDiv">
			<form method="POST" action="index.php" enctype="multipart/form-data">
				<label>Groupe Name</label></br>
				<input type="text" name="nameproject" /></br></br>
				<label >Email</label></br>
				<input type="text" name="emailproject"/></br></br>
				<label >Password</label></br>
				<input type="password" name="password"/></br></br>
				<label >Re-enter Password</label></br>
				<input type="password" name="passwordConfirm"/></br></br>
				
				<input type="submit" name="submit"/>




				
			</form>
			
		</div>
	</div>
</body>
</html>