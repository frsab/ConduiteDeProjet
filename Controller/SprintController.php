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
		//$controller->sprintController->showAll();
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
	
}

