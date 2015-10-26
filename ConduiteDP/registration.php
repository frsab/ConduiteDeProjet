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

			$error="You are succefully registred";
		}
	}
}
?>

<!--  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link rel="stylesheet" href="assets/css/styles.css" class="rel">
</head>
<body>
	
	<div id="wrapper">
		<div id="menu">
			<a href="index.php">Sign Up</a>
			<a href="login.php">Login</a>
		</div>
		<div id="formDiv">
			<form method="POST" action="login.php" enctype="multipart/form-data">
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
</html>  -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Scrum Project Manager</title>
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
		<div class="row text-center  ">
			<div class="col-md-12">
				<br /><br />
				<h2> Register</h2>

				<!--  <h5>( Register yourself to get access )</h5> -->
				<br />
			</div>
		</div>
		<div class="row">

			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>  New User ? Register Yourself </strong>  
					</div>
					
					<div class="panel-body">
						<form method="POST" action="login.php" enctype="multipart/form-data" role="form"><br/>
							<div id="error"><?php echo $error ?></div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" name="nameproject" class="form-control" placeholder="Desired Username" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">@</span>
								<input type="text" name="emailproject" class="form-control" placeholder="Your Email" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" name="password" class="form-control" placeholder="Enter Password" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" name="passwordConfirm" class="form-control" placeholder="Retype Password" />
							</div>
							
							<input class="btn btn-success" name ="Submit" type="submit" />
							<hr />
							Already Registered ?  <a href="login.php" >Login here</a>
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


