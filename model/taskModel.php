<?php
require_once('Model.php');

class TaskModel extends Model{

    public function __construct() {
        $this->db= Model::getInstance()->db;
    }
	//getTasks()
    
    public function getTasks($IDSPRINT){

        $sql="SELECT * FROM TASK WHERE IDSPRINT = $IDSPRINT";
        echo $sql;
        $query = $this->db->prepare($sql);
        $query->execute();//array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
/*
        $query = $this->db->prepare('SELECT * FROM task');// WHERE IDSPRINT = :IDSPRINT');
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
*/
    }
            //  insertTask($DESCRIPTION,$COST,$IDSPRINT)    
     public function insertTask($DESCRIPTION,$COST,$IDSPRINT){


       $query = $this->db->prepare('INSERT INTO TASK (IDTASK, IDSPRINT, DESCRIPTION, ETAT, Cost_Man_Day) VALUES (NULL, :IDSPRINT, :DESCRIPTION,NULL, :COST)');
        return $query->execute(array(
          // "SPRINT_ABSTRACT"=>$SPRINT_ABSTRACT
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
