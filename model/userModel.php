<?php
include 'Model.php';

class User extends Model {
    
    function __construct() {
        $this->db= Model::getInstance()->db;
    }
	
	function insert($USERNAME, $MAIL, $PASSWORD, $DATE){
        $insertQuery=$this->db->prepare('INSERT INTO user(IDUSER, USERNAME, MAIL, PASSWORD, REGISTRATIONDATE)
                                            VALUES(NULL, :USERNAME, :MAIL, :PASSWORD, :DATEREG)');

        return $insertQuery->execute(array(
            "USERNAME"=>$USERNAME,
            "MAIL"=>$MAIL,
            "PASSWORD"=>$PASSWORD,
            "DATEREG"=>$DATE 
        ));
        
    }

	function selectIdUserByName($NAME){
        $query = $this->db->prepare('SELECT iduser FROM user WHERE username = :NAME');
        $query->execute(array("NAME" => $NAME));
        return $query->fetch();
    }   

    function name_project_exists($name_project,$con){
        $result =mysqli_query($con,"SELECT IDUSER FROM user WHERE USERNAME='$name_project'");
        if(mysqli_num_rows($result) == 1){
            return true;
        }else 
            return false;
    }
    function name_project_exists1($project_name,$con){
        $result =mysqli_query($con,"SELECT IDPROJECT FROM project WHERE NAME='$project_name'");
        if(mysqli_num_rows($result) == 1){
            return true;
        }else 
            return false;
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

}
