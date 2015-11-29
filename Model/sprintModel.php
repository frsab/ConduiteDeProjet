<?php
require_once('Model.php');

class SprintModel extends Model{
    
    public function __construct() {
        $this->db= Model::getInstance()->db;
    }
	
    
    public function deleteSprint($IDSPRINT){
            try{
                $req = $this->db->prepare("DELETE FROM SPRINT WHERE IDSPRINT = :IDSPRINT");
                $result = $req->execute(array("IDSPRINT" => $IDSPRINT));
                return $result;
            }catch (Exception $e){
                echo "echecs suppression de la ligne dont l'identifiant est  : $IDSPRINT";
                return 0;
            }
    }

    public function select($IDSPRINT){
        $query = $this->db->prepare('SELECT * FROM sprint WHERE IDSPRINT = :IDSPRINT');
        $query->execute(array("IDSPRINT" => $IDSPRINT));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function select_us_sprint($IDSPRINT){
        $query = $this->db->prepare('SELECT * FROM USERSTORY WHERE IDSPRINT = :IDSPRINT');
        $query->execute(array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectAll($IDPROJECT){
        //SPRINT(`IDSPRINT`, `NUMERO`, `DATEDEBUT`, `DATEFIN`)
       echo "string selectAll($IDPROJECT){";
        $query = $this->db->prepare('SELECT * FROM SPRINT WHERE IDPROJECT = :IDPROJECT');
        $query->execute(array("IDPROJECT" => $IDPROJECT));
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    function insert($SPRINT_ABSTRACT, $IDPROJECT){

       $query = $this->db->prepare('INSERT INTO SPRINT (IDSPRINT, IDPROJECT, NUMERO, SPRINT_ABSTRACT) 
                                                VALUES (NULL,:IDPROJECT, 5 , :SPRINT_ABSTRACT)');
//     'INSERT INTO USERSTORY VALUES (null, :DISCRIPTION, :PRIORITY, :COST, :ETAT)');
        return $query->execute(array(
           "IDPROJECT" =>$IDPROJECT,
           "SPRINT_ABSTRACT"=>$SPRINT_ABSTRACT
        ));
    }  

    public function select_us_sprint_id($IDSPRINT, $IDPROJECT){
        //echo "id de ton sprint est $IDSPRINT";
        $query = $this->db->prepare('SELECT * FROM USERSTORY WHERE IDSPRINT = :IDSPRINT AND IDPROJECT = :IDPROJECT');
        $query->execute(array(
            "IDSPRINT" => $IDSPRINT,
            "IDPROJECT" =>$IDPROJECT
        ));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }  

    public function select_us_NotAssigned_sprint($IDPROJECT){
        $query = $this->db->prepare('SELECT * FROM USERSTORY WHERE IDSPRINT = 1 AND IDPROJECT = :IDPROJECT');
        $query->execute(array("IDPROJECT" =>$IDPROJECT));//array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function update_userStory_idSprint($IDUSERSTORY,$IDSPRINT){
//        echo "id de ton sprint est $IDSPRINT";
        $sql="UPDATE USERSTORY SET  IDSPRINT = $IDSPRINT WHERE IDUSERSTORY=$IDUSERSTORY ";
        //UPDATE userstory SET IDSPRINT`=[value-3] WHERE 1
        echo $sql;
        $query = $this->db->prepare($sql);
        $query->execute();//array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTasksSprint($IDSPRINT){
        $sql="SELECT * FROM TASK WHERE IDSPRINT = :IDSPRINT";
        $query = $this->db->prepare($sql);
        $query->execute(array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
