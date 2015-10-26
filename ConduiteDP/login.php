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
			header("location:profil.php");
		}

	}		
	else{
		$error="This user name does not exists";
	}
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="assets/css/styles.css" class="rel">
</head>
<body>
	<div id="error"><?php $error ?></div>
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
</html> -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Scrum Project Manager </title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h2> Login</h2>
				<br />
			</div>
		</div>
		<div id="error"><?php echo $error ?></div>
		<div class="row ">

			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>   Enter Details To Login </strong>  
					</div>
					<div class="panel-body">
						<form method="POST" action="login.php" enctype="multipart/form-data" role="form">
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" name="nameproject" class="form-control" placeholder="Your Username " />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" name="password" class="form-control"  placeholder="Your Password" />
							</div>
							<div class="form-group">
								<label class="checkbox-inline">
									<input type="checkbox" name="keep" /> Remember me
								</label>
								<!-- <span class="pull-right">
									<a href="#" >Forget password ? </a> 
								</span> -->
							</div>

							<input class="btn btn-primary" name="submit" type="submit" value="Login now" />
							<hr />
							Not register ? <a href="registration.php" >click here </a> 
						</form>
					</div>

				</div>
			</div>


		</div>
	</div>


	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
</body>
</html>

