<?php
//require_once('GlobalController.php');
//require_once('model/sprintModel.php');
require_once('model/Model.php');
class SprintController {
	//private $modelSprint;//= new sprintModel();

    function __construct(){
		 //$modelSprint= $model;//new sprintModel();
	
    }

	public function showAll(){
		
		$sprint_s = Model::getInstance()->sprintModel->selectAll();
	    include "view/sprint.php";
	}

	public function insert(){
	    include "view/addsprint.php";
	}

	public function update(){
	    include "view/updatesprint.php";
	}

	public function remove(){
	    include "view/sprint.php";
	} 

	 public function ajouterSprint($data){
        $SPRINT_ABSTRACT = $data["SPRINT_ABSTRACT"];
        
		echo Model::getInstance()->sprintModel->insert($SPRINT_ABSTRACT);
        header("Location: /ConduiteDeProjet");
	}
}

