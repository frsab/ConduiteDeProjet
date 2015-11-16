<?php

include 'controler.php'

class UserStoryControler extends Controler {

    private $model;

    function __construct(){
       $this->model = new UserStory();
    }
    public function showAll(){
        $userstory_s = $this->model->selectAll();
        include "View/backlog.php";
    }
    public function insert($data){
        $DISCRIPTION = $data["DISCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($DISCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /scrum");
    }
    public function update($data){
		$IDUSERSTORY =(int) $data["IDUSERSTORY"];
        $DISCRIPTION = $data["DISCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo "userstoryController ---- >  update(data)$IDUSERSTORY, $DISCRIPTION, $PRIORITY, $COST, $ETAT";
		
        echo $this->model->update($IDUSERSTORY, $DISCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /scrum");
        //header("Location: /scrum?p=updateview&IDUSERSTORY=".$IDUSERSTORY);
    }
	
    public function remove($IDUSERSTORY){
        $this->model->delete($IDUSERSTORY);
        header("Location: /scrum");
    }
 
    public function newUserStory(){
        include "View/addUS.php";
    }
	
    public function updateUserStory($IDUSERSTORY){
        $userstory = $this->model->select($IDUSERSTORY);
        include "View/updateUs.php";
    }


}
