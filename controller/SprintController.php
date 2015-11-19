<?php
require_once('model/sprintModel.php');

class SprintController {
	private $sprintModel;

    function __construct(){
		$this->sprintModel= new SprintModel();
    }


	public function deleteSprint($IDSPRINT, $IDPROJECT, $IDUSER){
		$this->sprintModel->deleteSprint($IDSPRINT);
		header("Location: /ConduiteDeProjet/?p=showSprint&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
	 //   include "view/updatesprint.php";
	}

	public function updateUsSprint(){	
		//$sprint_s = $this->sprintModel->selectAll();
	    include "view/updatesprint.php";
	}

	public function addSprint(){	
	    include "view/addsprint.php";
	}

	public function showAll($IDPROJECT){
		$sprint_s = $this->sprintModel->selectAll($IDPROJECT);
	    include "view/planning.php";
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
	 	$IDPROJECT = $data["IDPROJECT"];
	 	$IDUSER= $data["IDUSER"];
        $SPRINT_ABSTRACT = $data["SPRINT_ABSTRACT"];
		echo $this->sprintModel->insert($SPRINT_ABSTRACT, $IDPROJECT);
        header("Location: /ConduiteDeProjet/?p=showSprint&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
	}

	public function showHelpSprint($IDUSER, $IDPROJECT){
        include "view/helpplanning.php";
    }

}

