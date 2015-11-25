<?php
require_once('Model.php');

class TaskModel extends Model{

    public function __construct() {
        $this->db= Model::getInstance()->db;
    }
    
    public function getTasks($IDSPRINT){
        $sql="SELECT * FROM TASK WHERE IDSPRINT = :IDSPRINT";
        $query = $this->db->prepare($sql);
        $query->execute(array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertTask($DESCRIPTION,$COST,$IDSPRINT){
       $query = $this->db->prepare('INSERT INTO TASK (IDTASK, IDSPRINT, DESCRIPTION, ETAT, Cost_Man_Day) 
                                                    VALUES (NULL, :IDSPRINT, :DESCRIPTION,NULL, :COST)');
        return $query->execute(array(
           "IDSPRINT"=>$IDSPRINT,
            "DESCRIPTION"=>$DESCRIPTION,
            "COST"=>$COST
        ));
    }    

    public function select($IDTASK){
    }

    public function selectTask_Project_($IDTASK){
    }

    public function delete($IDTASK){
    }

    public function deleteAll($IDTASK){
    }
    
    public function update($IDTASK){
    }


      
}
