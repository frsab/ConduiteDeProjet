<?php
require_once('model.php');

class SprintModel extends Model{
    
    public function __construct() {
        $this->db= Model::getInstance()->db;
    }
	
    
    public function deleteSprint($IDSPRINT){
        echo "j'essaye de supprimer la ligne dont l'identifiant est  : $IDSPRINT";
            try{ 
                $sql="DELETE * FROM SPRINT WHERE IDSPRINT = $IDSPRINT";
                $this->bd->exec($sql);
                echo "Record deleted successfully";
            
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
        $query = $this->bd->prepare('SELECT * FROM USERSTORY WHERE IDSPRINT = :IDSPRINT');
        $query->execute();//array("IDSPRINT" => $IDSPRINT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectAll(){
        //SPRINT(`IDSPRINT`, `NUMERO`, `DATEDEBUT`, `DATEFIN`)
        $query = $this->bd->prepare('SELECT * FROM SPRINT');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    function insert($SPRINT_ABSTRACT){

       $query = $this->bd->prepare('INSERT INTO SPRINT (IDSPRINT, NUMERO, SPRINT_ABSTRACT) VALUES (NULL, 5, :SPRINT_ABSTRACT)');
//     'INSERT INTO USERSTORY VALUES (null, :DISCRIPTION, :PRIORITY, :COST, :ETAT)');
        return $query->execute(array(
           "SPRINT_ABSTRACT"=>$SPRINT_ABSTRACT
        ));
    }    
}
