<?php
//require_once('GlobalController.php');
//require_once('model/sprintModel.php');
require_once('model/Model.php');
class SprintController {
	//private $modelSprint;//= new sprintModel();

    function __construct(){
		 //$modelSprint= $model;//new sprintModel();
	
    }

	public function showPlanning(){
		$sprint_s = Model::getInstance()->sprintModel->selectAll();
	 
	//	$sprint_s = Model::getInstance()->sprintModel->selectSprint();
//		$userstory_sprint_s = Model::getInstance()->sprintModel->select_us_sprint($IDSPRINT);
	    include "view/planning.php";
	}

	public function showAllSprintBacklog(){
		
		$sprint_s = Model::getInstance()->sprintModel->selectAll();
	    $userstory_sprint_s=Model::getInstance()->sprintModel->select_us_sprint();
	    include "view/sprint.php";
	}
	public function deleteSprint($IDSPRINT){
		echo "Model::getInstance()->sprintModel->deleteSprint($IDSPRINT);";
				Model::getInstance()->sprintModel->deleteSprint($IDSPRINT);

        header("Location: /ConduiteDeProjet");


		
	 //   include "view/updatesprint.php";
	}

	public function updateUsSprint(){
		
		//$sprint_s = Model::getInstance()->sprintModel->selectAll();
	    include "view/updatesprint.php";
	}
	public function addSprint(){
		
	//	$sprint_s = Model::getInstance()->sprintModel->selectAll();
	    include "view/addsprint.php";
	}


	public function showSprintTasks(){

		
		$sprint_s = Model::getInstance()->sprintModel->selectAll();
	    $userstory_sprint_s=Model::getInstance()->sprintModel->select_us_sprint();
	    include "view/sprinttasks.php";
	}


	public function showSprintUs($IDSPRINT){
		$sprint_s = Model::getInstance()->sprintModel->selectAll();
		$userstory_sprint_s = Model::getInstance()->sprintModel->select_us_sprint($IDSPRINT);
		
	    include "view/sprint.php";
	}

	public function insert(){
	    include "view/addsprint.php";
	}

	public function updateSprint($IDSPRINT){
		$notAssignedUserStory=Model::getInstance()->sprintModel->select_us_NotAssigned_sprint();
		$assignedUserStory=Model::getInstance()->sprintModel->select_us_sprint_id($IDSPRINT);
		
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

