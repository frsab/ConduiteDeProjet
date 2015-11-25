<?php
require_once('model/TaskModel.php');

class TaskController {
	private $taskModel;

    function __construct(){
    	$this->taskModel= new TaskModel();
    }

	public function ListTask($IDSPRINT){
		$id=$IDSPRINT;
		$task_s = $this->taskModel->getTasks($IDSPRINT);
		include "view/sprinttasks.php";
	}

	public function addTask(){
		include "view/addtask.php";
	}

	public function ajouterTask($data){
        $DESCRIPTION = $data["ABSTRACT_TASK"];
        $COST = $data["COST"];
        $IDSPRINT = $data["IDSPRINT"];

		$this->taskModel->insertTask($DESCRIPTION,$COST,$IDSPRINT);
        header("Location: /ConduiteDeProjet?p=ListTask&IDSPRINT=$IDSPRINT");
	}

	public function showHelpTasks($IDUSER, $IDPROJECT){
        include "view/helptasks.php";
    }
		
}

