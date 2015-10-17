<?php 
	
	include("connect.php");

	$error="";
	if (isset($_POST['submit'])) {
		$nameproject=$_POST['nameproject'];
		$emailproject=$_POST['emailproject'];
		$passwordproject=$_POST['password'];
		$passwordprojectconfirm=$_POST['passwordConfirm'];
		$image=$_FILES['image']['name'];
		$tmp_image=$_FILES['image']['tmp_name'];
		$image_size=$_FILES['image']['size'];

		if(strlen($nameproject)<3){
			$error ="Name of Project is too short";
		}
		else if(strlen($passwordproject)<8){
			$error="Password must be greater than 8 characters";
		}
		else if($passwordproject !== $passwordprojectconfirm){
			$error="Password does not match";
		}
		else if($image == ""){
			$error ="Please upload your image";
		}
		else{
			$error="Your are successfully registred";
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
				<label >Image</label></br>
				<input type="file" name="image"/></br></br>
				<input type="submit" name="submit"/>




				
			</form>
			
		</div>
	</div>
</body>
</html>