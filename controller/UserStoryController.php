<?php

require_once('model/userstory.php');

class UserStoryController {

    private $model;

    function __construct(){
       $this->model = new UserStory();
    }
    public function showAll($IDPROJECT){
        $userstory_s = $this->model->selectAll($IDPROJECT);
        include "view/backlog.php";
    }
    public function insert($data){
        $IDPROJECT = $data["IDPROJECT"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($IDPROJECT, $DESCRIPTION, $PRIORITY, $COST, $ETAT);
        $IDUSER= $data["IDUSER"];
        header("Location: /ConduiteDeProjet/?p=showUS&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
    }

    public function update($data){
        $IDPROJECT = $data["IDPROJECT"];
		$IDUSERSTORY =(int) $data["IDUSERSTORY"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo "userstoryController ---- >  update(data)$IDUSERSTORY, $DESCRIPTION, $PRIORITY, $COST, $ETAT";
        echo $this->model->update($IDUSERSTORY, $DESCRIPTION, $PRIORITY, $COST, $ETAT);
        $IDUSER= $data["IDUSER"];
        header("Location: /ConduiteDeProjet/?p=showUS&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
        //header("Location: /ConduiteDeProjet?p=updateView&IDUSERSTORY=".$IDUSERSTORY);
    }
	
    public function remove($IDUSERSTORY, $IDPROJECT, $IDUSER){
        $this->model->delete($IDUSERSTORY);
        header("Location: /ConduiteDeProjet/?p=showUS&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
    }
 
    public function newUserStory(){
        include "view/addus.php";
    }
	
    public function updateUserStory($IDUSERSTORY){
        $userstory = $this->model->select($IDUSERSTORY);
        include "view/updateus.php";
    }

    public function showHelpBacklog($IDUSER, $IDPROJECT){
        include "view/helpbacklog.php";
    }

}
