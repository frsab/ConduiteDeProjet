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

	public function updateUsSprint($IDUSER){	
		//$sprint_s = $this->sprintModel->selectAll();
		$IDUSER=$IDUSER;
	    include "view/updatesprint.php";
	}

	public function addSprint(){	
	    include "view/addsprint.php";
	}

	public function showAll($IDUSER,$IDPROJECT){
		echo "string$IDUSER,$IDPROJECT";
		$sprint_s = $this->sprintModel->selectAll($IDPROJECT);
	    include "view/planning.php";
	}


	public function showAllSprintBacklog($IDSPRINT, $IDPROJECT){
		$sprint_s = $this->sprintModel->selectAll($IDPROJECT);
		$userstory_sprint_s = $this->sprintModel->select_us_sprint($IDSPRINT);
		$task_s= $this->sprintModel->getTasksSprint($IDSPRINT);
	    include "view/sprint.php";
	}
	public function showSprintUs($IDSPRINT, $IDPROJECT){
		$sprint_s = $this->sprintModel->selectAll($IDPROJECT);
		$userstory_sprint_s = $this->sprintModel->select_us_sprint($IDSPRINT);
		$task_s= $this->sprintModel->getTasksSprint($IDSPRINT);
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
		$this->sprintModel->insert($SPRINT_ABSTRACT, $IDPROJECT);
        header("Location: /ConduiteDeProjet/?p=showSprint&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
	}

	public function showHelpSprint($IDUSER, $IDPROJECT){
        include "view/helpplanning.php";
    }

    public function moveUsToSprintUS($IDUSERSTORY,$IDSPRINT){
		$sprint_s = $this->sprintModel->update_userStory_idSprint($IDUSERSTORY,$IDSPRINT);
		header("location:".  $_SERVER['HTTP_REFERER']); 
		//include "ConduiteDeProjet/?p=updateUsSprint&IDSPRINT=$IDSPRINT";
	
	}

	public function moveUsToNotAssignedUS($IDUSERSTORY,$IDSPRINT){
		$sprint_s = $this->sprintModel->update_userStory_idSprint($IDUSERSTORY,1);
		header("location:".  $_SERVER['HTTP_REFERER']); 
		//include "ConduiteDeProjet/?p=updateUsSprint&IDSPRINT=$IDSPRINT";
	}

	public function showKanban($IDSPRINT){
		$task_s= $this->sprintModel->getTasksSprint($IDSPRINT);
		include 'view/sprintkanban.php';
	}
	
	public function showHelpKanban(){
		include 'view/helpkanban.php';	
	}
}

