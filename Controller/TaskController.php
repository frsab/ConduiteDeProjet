<?php

require_once('model/Model.php');
class TaskController {
	

    function __construct(){
		
	
    }

	public function foo(){
		$sprint_s = Model::getInstance()->taskModel->foo();
	}

	public function ListTask($IDSPRINT){
		$task_s = Model::getInstance()->taskModel->getTasks($IDSPRINT);
		   include "view/sprinttasks.php";

	}

	public function addTask(){
		//$task_s = Model::getInstance()->taskModel->getTasks($IDSPRINT);
		   include "view/addtask.php";

	}
	public function ajouterTask($data){
        $DESCRIPTION = $data["DESCRIPTION"];
        $COST = $data["COST"];

		echo Model::getInstance()->sprintModel->insertTask($DESCRIPTION,$COST);
        header("Location: /ConduiteDeProjet");
	}

	 
		
}

