<?php 	
		function name_project_exists($name_project,$con){
			$result =mysqli_query($con,"SELECT id FROM projects WHERE nameproject='$name_project'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;
		}
		function email_exists($email_project,$con){
			$result =mysqli_query($con,"SELECT id FROM projects WHERE emailproject='$email_project'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;

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