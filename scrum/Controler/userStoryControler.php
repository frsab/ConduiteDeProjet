<?php


include 'Model/userstory.php';
include 'controler.php';

class UserStoryControler extends Controler {

    private $model;

    function __construct(){
       $this->model = new UserStory();
    }
    public function showAll($IDPROJECT){
        $userstory_s = $this->model->selectAll($IDPROJECT);
        include "View/backlog.php";
    }
    public function insert($data){
        $IDPROJECT = $data["IDPROJECT"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($IDPROJECT, $DESCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /scrum/?p=showUS&IDPROJECT=".$IDPROJECT);
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
        header("Location: /scrum/?p=showUS&IDPROJECT=".$IDPROJECT);
        //header("Location: /scrum?p=updateview&IDUSERSTORY=".$IDUSERSTORY);
    }
	
    public function remove($IDUSERSTORY,$IDPROJECT){
        $this->model->delete($IDUSERSTORY);
        header("Location: /scrum?p=showUS&IDPROJECT=".$IDPROJECT);
    }
 
    public function newUserStory(){
        include "View/addus.php";
    }
	
    public function updateUserStory($IDUSERSTORY){
        $userstory = $this->model->select($IDUSERSTORY);
        include "View/updateUs.php";
    }


}
