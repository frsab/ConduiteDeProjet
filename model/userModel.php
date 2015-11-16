<?php
require_once('Model.php');

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
    
	function selectPassUserByName($NAME){
        $query = $this->db->prepare('SELECT PASSWORD FROM user WHERE username = :NAME');
        $query->execute(array("NAME" => $NAME));
        return $query->fetch();
    }	

    function name_project_exists($USERNAME){
		 $query = $this->db->prepare('SELECT IDUSER FROM user WHERE USERNAME=:NAME');
         $query->execute(array("NAME" => $USERNAME));
        if( $query->rowCount() == 1){
            return true;
        }else 
            return false;
    }
	
	/**
	* a réctifier si vous en aurez besoin
 	*/
    function name_project_exists1($project_name){
        $result =mysqli_query( $this->db,"SELECT IDPROJECT FROM project WHERE NAME='$project_name'");
        if(mysqli_num_rows($result) == 1){
            return true;
        }else 
            return false;
    }
        function email_exists($email_project){
            $result =mysqli_query( $this->db,"SELECT IDUSER FROM user WHERE MAIL='$email_project'");
            if(mysqli_num_rows($result) == 1){
                return true;
            }
            else return false;

        }
        function iduser($name_project){
            $result =mysqli_query( $this->db,"SELECT IDUSER FROM user WHERE USERNAME='$name_project'");
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
