<?php
require_once('Model.php');

class SprintModel extends Model{
    
    public function __construct() {
        $this->db= Model::getInstance()->db;
    }
	
    
    public function deleteSprint($IDSPRINT){
        echo "j'essaye de supprimer la ligne dont l'identifiant est  : $IDSPRINT";
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
        $query->execute();//array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectAll($IDPROJECT){
        //SPRINT(`IDSPRINT`, `NUMERO`, `DATEDEBUT`, `DATEFIN`)
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
}
