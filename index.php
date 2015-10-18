<?php 
	
	include("connect.php");
	include("functions.php");

	$error="";
	if (isset($_POST['submit'])) {
		$nameproject=mysql_real_escape_string($_POST['nameproject']);
		$emailproject=mysql_real_escape_string($_POST['emailproject']);
		$passwordproject=$_POST['password'];
		$passwordprojectconfirm=$_POST['passwordConfirm'];
		$image=$_FILES['image']['name'];
		$tmp_image=$_FILES['image']['tmp_name'];
		$image_size=$_FILES['image']['size'];

		$date=date("F,d ");

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
		else if($image_size>1048576){
			$error ="Image size must be less than 1 mb ";

		}
		else{

			$passwordproject = md5($passwordproject);

			$imageExt=explode(".",$image );
			$imageExtension=$imageExt[1];

			if($imageExtension == 'PNG' || $imageExtension == 'png' || $imageExtension == 'JPG' || $imageExtension == 'jpg'){


			$image=rand(0,100000).rand(0,10000).rand(0,100000).time().".".$imageExtension;
			$insertQuery="INSERT INTO projects(nameproject,emailproject,password,image,date)  
			VALUES('$nameproject','$emailproject','$passwordproject','$image','$date')";
			if(mysqli_query($con,$insertQuery)){
				if(move_uploaded_file($tmp_image, "images/$image")){
					$error="You are succefully registred";
				}
				else{
					$error="Image is not uploaded";
				}
			}
			}
			else{
				$error="File must be an image ";
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
				<label >Image</label></br>
				<input type="file" name="image"/></br></br>
				<input type="submit" name="submit"/>




				
			</form>
			
		</div>
	</div>
</body>
</html>