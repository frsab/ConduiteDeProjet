<?php
include 'Model.php';
class UserStory extends Model {
    function __construct() {
        parent::__construct();
    }
	
    function select($IDUSERSTORY){
        $query = $this->db->prepare('SELECT * FROM userstory WHERE IDUSERSTORY = :IDUSERSTORY');
        $query->execute(array("IDUSERSTORY" => $IDUSERSTORY));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function selectAll(){
        $query = $this->db->prepare('SELECT * FROM USERSTORY');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function insert($DISCRIPTION, $PRIORITY, $COST , $ETAT){
	    $query = $this->db->prepare('INSERT INTO USERSTORY (IDUSERSTORY, IDPROJECT, IDSPRINT, DISCRIPTION, PRIORITY, COST, ETAT) VALUES (NULL, 73, 1, :DISCRIPTION, :PRIORITY, :COST, :ETAT)');
//		'INSERT INTO USERSTORY VALUES (null, :DISCRIPTION, :PRIORITY, :COST, :ETAT)');
        return $query->execute(array(
			"DISCRIPTION"=>$DISCRIPTION, 
			"PRIORITY"=>$PRIORITY, 
			"COST"=>$COST , 
			"ETAT"=>$ETAT
        ));
    }

    function update($IDUSERSTORY, $DISCRIPTION, $PRIORITY, $COST , $ETAT){
		
			// Création de la requête SQL
			$sqlUpdate = "UPDATE USERSTORY
						SET 
							DISCRIPTION= :DISCRIPTION,
							PRIORITY= :PRIORITY,
							COST = :COST ,
							ETAT= :ETAT
						WHERE 
							IDUSERSTORY = :IDUSERSTORY";
			$stmt = $this->db->prepare($sqlUpdate);
			$valeurs = array(
							':DISCRIPTION'=>$DISCRIPTION,
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
