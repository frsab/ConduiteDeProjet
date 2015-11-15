<?php

class SprintModel   {
    private $bd;
    public function __construct($db) {
        $this->bd= $db;
    }
	
    public function select($IDSPRINT){
        $query = $this->db->prepare('SELECT * FROM sprint WHERE IDSPRINT = :IDSPRINT');
        $query->execute(array("IDSPRINT" => $IDSPRINT));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function selectAll(){
        echo "selectAll();";
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
