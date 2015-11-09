<?php 	
		function name_project_exists($name_project,$con){
			$result =mysqli_query($con,"SELECT IDUSER FROM user WHERE USERNAME='$name_project'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;
		}
		function name_project_exists1($project_name,$con){
			$result =mysqli_query($con,"SELECT IDPROJECT FROM project WHERE NAME='$project_name'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;
		}
		function email_exists($email_project,$con){
			$result =mysqli_query($con,"SELECT IDUSER FROM user WHERE MAIL='$email_project'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;

		}
		function iduser($name_project,$con){
			$result =mysqli_query($con,"SELECT IDUSER FROM user WHERE USERNAME='$name_project'");
			
			
			return $result;
		}
		function logged_in(){
			
			if(isset($_SESSION['nameproject']) || isset($_COOKIE['nameproject'])){
				return true;
			}	
			else{
				return false;

			}
		}

 ?>