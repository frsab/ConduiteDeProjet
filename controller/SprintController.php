<?php
require_once('model/sprintModel.php');

class SprintController {
	private $modelSprint;

    function __construct(){
		$modelSprint= new sprintModel();
    }


	public function deleteSprint($IDSPRINT){
		echo "$this->sprintModel->deleteSprint($IDSPRINT);";
				$this->sprintModel->deleteSprint($IDSPRINT);

        header("Location: /ConduiteDeProjet");


		
	 //   include "view/updatesprint.php";
	}

	public function updateUsSprint(){
		
		//$sprint_s = $this->sprintModel->selectAll();
	    include "view/updatesprint.php";
	}
	public function addSprint(){
		
		$sprint_s = $this->sprintModel->selectAll();
	    include "view/planning.php";
	}
	public function showAll(){
		
		$sprint_s = $this->sprintModel->selectAll();
	    include "view/sprint.php";
	}

	public function showSprintUs($IDSPRINT){
		$sprint_s = $this->sprintModel->selectAll();
		$userstory_sprint_s = $this->sprintModel->select_us_sprint($IDSPRINT);
		
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
        
		echo $this->sprintModel->insert($SPRINT_ABSTRACT);
        header("Location: /ConduiteDeProjet");
	}
}

