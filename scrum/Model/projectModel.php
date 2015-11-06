<?php
include 'Model.php';

class Project extends Model {
    
    function __construct() {
        parent::__construct();
    }
	
    function select($NAME){
        $query = $this->db->prepare('SELECT * FROM project WHERE NAME = :NAME');
        $query->execute(array("NAME" => $NAME));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function selectAll(){
        $query = $this->db->prepare('SELECT * FROM PROJECT');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insert($IDUSER, $NAME , $NBCOLABORATORS, $STATUS, $DESCRIPTION){
	    $query = $this->db->prepare('INSERT INTO PROJECT (IDPROJECT, IDUSER, NAME, NBCOLABORATORS, STATUS, DESCRIPTION) 
                                                VALUES (NULL, :IDUSER, :NAME, :NBCOLABORATORS, :STATUS, :DESCRIPTION)');
        return $query->execute(array(
            "IDUSER"=>$IDUSER,
            "NAME"=>$NAME,
            "NBCOLABORATORS"=>$NBCOLABORATORS,
            "STATUS"=>$STATUS,
			"DESCRIPTION"=>$DESCRIPTION 
        ));
    }

    function update($IDUSER, $NAME , $NBCOLABORATORS, $STATUS, $DESCRIPTION){
		$sqlUpdate = "UPDATE PROJECT
        					SET 
                                IDUSER= :IDUSER,
                                NAME= :NAME,
                                NBCOLABORATORS= :NBCOLABORATORS,
                                STATUS= :STATUS,
    							DESCRIPTION= :DESCRIPTION
    						WHERE 
    							NAME = :NAME";
		$stmt = $this->db->prepare($sqlUpdate);
		$valeurs = array(
                            ':IDUSER'=>$IDUSER,
                            ':NAME'=>$NAME,
                            ':NBCOLABORATORS'=>$NBCOLABORATORS,
                            ':DESCRIPTION'=>$DESCRIPTION,
                            ':STATUS'=>$STATUS
					       	);
		if ($stmt->fetch() == false){
                echo 'ERROR on update';
            }else{ 
                    echo ' Update successful';
                }	
	   return $stmt->execute($valeurs);
    }

    function delete($NAME){
        try{
            $req = $this->db->prepare("DELETE FROM PROJECT WHERE NAME = :NAME");
            $result = $req->execute(array("NAME" => $NAME));
            return $result;
        }catch (Exception $e){
            return 0;
        }
    }
}
