<?php
include 'Model.php';

class Project extends Model {
    
    function __construct() {
        parent::__construct();
    }
	
    function select($IDPROJECT){
        $query = $this->db->prepare('SELECT * FROM project WHERE IDPROJECT = :IDPROJECT');
        $query->execute(array("IDPROJECT" => $IDPROJECT));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function selectAll(){
        $query = $this->db->prepare('SELECT * FROM PROJECT');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insert($IDUSER, $NAME , $NBCOLABORATORS, $DESCRIPTION){
	    $query = $this->db->prepare('INSERT INTO PROJECT (IDPROJECT, IDUSER, NAME, NBCOLABORATORS, DESCRIPTION) 
                                                VALUES (NULL, :IDUSER, :NAME, :NBCOLABORATORS, :DESCRIPTION)');
        return $query->execute(array(
            "IDUSER"=>$IDUSER,
            "NAME"=>$NAME,
            "NBCOLABORATORS"=>$NBCOLABORATORS,
			"DESCRIPTION"=>$DESCRIPTION, 
        ));
    }

    function update($IDPROJECT, $IDUSER, $NAME , $NBCOLABORATORS, $DESCRIPTION){
		$sqlUpdate = "UPDATE PROJECT
        					SET 
                                IDUSER= :IDUSER,
                                NAME= :NAME,
                                NBCOLABORATORS= :NBCOLABORATORS,
    							DESCRIPTION= :DESCRIPTION
    						WHERE 
    							IDPROJECT = :IDPROJECT";
		$stmt = $this->db->prepare($sqlUpdate);
		$valeurs = array(
                            ':IDUSER'=>$IDUSER,
                            ':NAME'=>$NAME,
                            ':NBCOLABORATORS'=>$NBCOLABORATORS,
                            ':DESCRIPTION'=>$DESCRIPTION,
                            ':IDPROJECT'=>$IDPROJECT
					       	);
		if ($stmt->fetch() == false){
                echo 'ERROR on update';
            }else{ 
                    echo ' Update successful';
                }	
	   return $stmt->execute($valeurs);
    }

    function delete($IDPROJECT){
        try{
            $req = $this->db->prepare("DELETE FROM PROJECT WHERE IDPROJECT = :IDPROJECT");
            $result = $req->execute(array("IDPROJECT" => $IDPROJECT));
            return $result;
        }catch (Exception $e){
            return 0;
        }
    }
}
