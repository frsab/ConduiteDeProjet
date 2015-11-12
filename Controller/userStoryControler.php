<?php

class UserStoryControler {

    private $model;

    function __construct(){
       $this->model = new UserStory();
    }
    public function showAll(){
        $userstory_s = $this->model->selectAll();
        include "View/backlog.php";
    }
    public function insert($data){
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($DESCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /ConduiteDeProjet");
    }
    public function update($data){
		$IDUSERSTORY =(int) $data["IDUSERSTORY"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo "userstoryController ---- >  update(data)$IDUSERSTORY, $DESCRIPTION, $PRIORITY, $COST, $ETAT";
		
        echo $this->model->update($IDUSERSTORY, $DESCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /ConduiteDeProjet");
        //header("Location: /ConduiteDeProjet?p=updateview&IDUSERSTORY=".$IDUSERSTORY);
    }
	
    public function remove($IDUSERSTORY){
        $this->model->delete($IDUSERSTORY);
        header("Location: /ConduiteDeProjet");
    }
 
    public function newUserStory(){
        include "view/addUS.php";
    }
	
    public function updateUserStory($IDUSERSTORY){
        $userstory = $this->model->select($IDUSERSTORY);
        include "view/updateUs.php";
    }


}
