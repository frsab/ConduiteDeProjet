<?php

class UserStoryControler {

    private $model;

    function __construct(){
       $this->model = new UserStory();
    }
    public function showAll(){
        $userstory_s = $this->model->selectAll();
        include "view/backlog.php";
    }
    public function insert($data){
        $DISCRIPTION = $data["DISCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($DISCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /ConduiteDP");
    }
    public function update($data){
		$IDUSERSTORY =(int) $data["IDUSERSTORY"];
        $DISCRIPTION = $data["DISCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo "userstoryController ---- >  update(data)$IDUSERSTORY, $DISCRIPTION, $PRIORITY, $COST, $ETAT";
		
        echo $this->model->update($IDUSERSTORY, $DISCRIPTION, $PRIORITY, $COST, $ETAT);
        header("Location: /ConduiteDP");
        //header("Location: /scrum?p=updateview&IDUSERSTORY=".$IDUSERSTORY);
    }
	
    public function remove($IDUSERSTORY){
        $this->model->delete($IDUSERSTORY);
        header("Location: /ConduiteDP");
    }
 
    public function newUserStory(){
        include "view/addus.php";
    }
	
    public function updateUserStory($IDUSERSTORY){
        $userstory = $this->model->select($IDUSERSTORY);
        include "view/updateus.php";
    }


}
