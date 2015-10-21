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
		
		$passwordproject=mysql_real_escape_string($_POST['password']);
		if(name_project_exists($nameproject,$con)){
			$result=mysqli_query($con,"SELECT password FROM projects WHERE nameproject='$nameproject'");
			$retrievepassword=mysqli_fetch_assoc($result);

			if(md5($passwordproject) !== $retrievepassword['password']){
				$error ="Password is incorrect";
			}
			else{
				$_SESSION['nameproject'] =$nameproject;
				header("location:profil.php");
			}
			
			}
			
			




		
		else{
			$error=" Project name does not exists";
		}
		
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
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
			<form method="POST" action="login.php" enctype="multipart/form-data">
				<label>Groupe Name</label></br>
				<input type="text" name="nameproject" /></br></br>
				
				<label >Password</label></br>
				<input type="password" name="password"/></br></br>
				<input type="checkbox" name="keep">
				<label >Keep me logged in</label></br></br>
				
				
				<input type="submit" name="submit" value="login"/></br></br>


				
			</form>
			
		</div>
	</div>
</body>
</html>