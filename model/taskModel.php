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

    public function selectTask($IDTASK){
        $query = $this->db->prepare('SELECT * FROM TASK WHERE IDTASK = :IDTASK');
        $query->execute(array("IDTASK" => $IDTASK));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function delete($IDTASK){
        try{
            $req = $this->db->prepare("DELETE FROM TASK WHERE IDTASK = :IDTASK");
            $result = $req->execute(array("IDTASK" => $IDTASK));
            echo $result;
        }catch (Exception $e){
            return 0;
        }
    }

    public function deleteAll($IDTASK){
    }
    
    function update($IDTASK, $DESCRIPTION, $COST){
        $sqlUpdate = "UPDATE TASK
                            SET 
                                DESCRIPTION= :DESCRIPTION,
                                Cost_Man_Day= :COST
                            WHERE 
                                IDTASK = :IDTASK";
        $stmt = $this->db->prepare($sqlUpdate);
        $valeurs = array(
                            ':DESCRIPTION'=>$DESCRIPTION,
                            ':COST'=>$COST,
                            ':IDTASK'=>$IDTASK
                            );
        if ($stmt->fetch() == false){
                echo 'ERROR on update';
            }else{ 
                    echo ' Update successful';
                }   
        return $stmt->execute($valeurs);
    }


      
}
