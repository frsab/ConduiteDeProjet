<?php
require_once('model/TaskModel.php');

class TaskController {
	private $taskModel;

    function __construct(){
    	$this->taskModel= new TaskModel();
    }

	public function foo(){
		$sprint_s = $this->taskModel->foo();
	}

	public function ListTask($IDSPRINT){
		$id=$IDSPRINT;
		$task_s = $this->taskModel->getTasks($IDSPRINT);
		   include "view/sprinttasks.php";

	}

	public function addTask(){
		//$task_s = $this->taskModel->getTasks($IDSPRINT);
		   include "view/addtask.php";

	}
	public function ajouterTask($data){ 
		      /*                         
		$IDPROJECT = $data["IDPROJECT"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $PRIORITY = $data["PRIORITY"];
        $COST = $data["COST"];
        $ETAT = $data["ETAT"];
		echo $this->model->insert($IDPROJECT, $DESCRIPTION, $PRIORITY, $COST, $ETAT);
        $IDUSER= $data["IDUSER"];
        header("Location: /ConduiteDeProjet/?p=showUS&IDUSER=".$IDUSER."&IDPROJECT=".$IDPROJECT);
*/
        $DESCRIPTION = $data["ABSTRACT_TASK"];
        $COST = $data["COST"];
        $IDSPRINT = $data["IDSPRINT"];

		echo $this->taskModel->insertTask($DESCRIPTION,$COST,$IDSPRINT);
        header("Location: /ConduiteDeProjet?p=ListTask&IDSPRINT=$IDSPRINT");
	}

	 
		
}

