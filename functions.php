<?php 	
		function name_project_exists($name_project,$con){
			$result =mysqli_query($con,"SELECT id FROM projects WHERE nameproject='$name_project'");
			if(mysqli_num_rows($result) == 1){
				return true;
			}
			else return false;
		}

 ?>