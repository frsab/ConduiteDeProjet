<?php
require_once('model.php');
class UserStory extends Model {
    function __construct() {
        $this->db= Model::getInstance()->db;
    }
	
    function select($IDUSERSTORY){
        $query = $this->db->prepare('SELECT * FROM userstory WHERE IDUSERSTORY = :IDUSERSTORY');
        $query->execute(array("IDUSERSTORY" => $IDUSERSTORY));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function selectAll($IDPROJECT){
        $query = $this->db->prepare('SELECT * FROM userstory WHERE IDPROJECT = :IDPROJECT');
        $query->execute(array("IDPROJECT" => $IDPROJECT));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function insert($IDPROJECT, $DESCRIPTION, $PRIORITY, $COST , $ETAT){
	    $query = $this->db->prepare('INSERT INTO USERSTORY (IDUSERSTORY, IDPROJECT, IDSPRINT, DESCRIPTION, PRIORITY, COST, ETAT) 
                                        VALUES (NULL, :IDPROJECT, 1, :DESCRIPTION, :PRIORITY, :COST, :ETAT)');
//		'INSERT INTO USERSTORY VALUES (null, :DESCRIPTION, :PRIORITY, :COST, :ETAT)');
        return $query->execute(array(
            "IDPROJECT"=>$IDPROJECT,
			"DESCRIPTION"=>$DESCRIPTION, 
			"PRIORITY"=>$PRIORITY, 
			"COST"=>$COST, 
			"ETAT"=>$ETAT
        ));
    }

    function update($IDUSERSTORY, $DESCRIPTION, $PRIORITY, $COST , $ETAT){
		
			// Création de la requête SQL
			$sqlUpdate = "UPDATE USERSTORY
						SET 
							DESCRIPTION= :DESCRIPTION,
							PRIORITY= :PRIORITY,
							COST = :COST ,
							ETAT= :ETAT
						WHERE 
							IDUSERSTORY = :IDUSERSTORY";
			$stmt = $this->db->prepare($sqlUpdate);
			$valeurs = array(
							':DESCRIPTION'=>$DESCRIPTION,
							':PRIORITY'=>$PRIORITY,
							':COST'=>$COST,
							':ETAT'=>$ETAT,
							':IDUSERSTORY'=>$IDUSERSTORY
							);
			if ($stmt->fetch() == false)
    {
        echo 'Pas de résultat';
		
    }
	else
	{
        echo ' résultat';
		
    }	
	return $stmt->execute($valeurs);	
			
				/*$stmt->execute(); */

  }

    function delete($IDUSERSTORY){
        try{
            $req = $this->db->prepare("DELETE FROM userstory WHERE IDUSERSTORY = :IDUSERSTORY");
            $result = $req->execute(array("IDUSERSTORY" => $IDUSERSTORY));

            return $result;
        }catch (Exception $e){
            return 0;
        }
    }
}
