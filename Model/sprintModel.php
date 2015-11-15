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
    
}
