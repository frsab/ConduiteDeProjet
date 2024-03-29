<?php
/* 
include("config/connect.php");
include("Model/userModel.php");
if(logged_in()){
				header("location:/ConduiteDeProjet/?p=showProjects");

	exit();
}
$error="";
if (isset($_POST['submit'])) {
	$nameproject=$_POST['nameproject'];
	$passwordproject=$_POST['password'];
	$checkBox=isset($_POST['keep']);
	if(name_project_exists($nameproject,$con)){
		$result=mysqli_query($con,"SELECT PASSWORD FROM user WHERE USERNAME='$nameproject'");
		$retrievepassword=mysqli_fetch_assoc($result);

		if(md5($passwordproject) !== $retrievepassword['PASSWORD']){
			$error ="Password is incorrect";
		}
		else{
			$_SESSION['nameproject'] =$nameproject;
			if($checkBox =="on"){
				setcookie("nameproject",$nameproject,time()+3600);
			}
			header("location:/ConduiteDeProjet/?p=showProjects");
		}

	}		
	else{
		$error="This user name does not exists.";
	}
}
//*/
?>


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
		
		<div class="row ">

			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>   Enter Details To Login </strong>  
					</div>
					<div class="panel-body">
					
						<div id="error"><font color="red"><?php if(isset($_GET['error'])) echo $_GET['error'] ?></font></div>
						<form method="POST" action="/ConduiteDeProjet/?p=login" enctype="multipart/form-data" role="form">
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" name="username" class="form-control" placeholder="Your Username " value="<?php if(isset($_POST['username'])) { echo htmlentities($_POST['username']);}?>"/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" name="password" class="form-control"  placeholder="Your Password" value="<?php if(isset($_POST['password'])) { echo htmlentities($_POST['password']);}?>" />
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
							Not register ? <a href="/ConduiteDeProjet/?p=registerView" >click here </a> 
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

