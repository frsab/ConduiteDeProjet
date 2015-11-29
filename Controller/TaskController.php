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
        $IDUSER= $data["IDUSER"];
        $IDPROJECT=$data["IDPROJECT"];
		$this->taskModel->insertTask($DESCRIPTION,$COST,$IDSPRINT);
        header("Location: /ConduiteDeProjet?p=ListTask&IDUSER=$IDUSER&IDPROJECT=$IDPROJECT&IDSPRINT=$IDSPRINT");
	}

	public function showHelpTasks($IDUSER, $IDPROJECT){
        include "view/helptasks.php";
    }

    public function updateTask($IDTASK){
        $task = $this->taskModel->selectTask((int)$IDTASK);
        include "view/updatetask.php";
    }

    public function update($data){
        $IDTASK =(int) $data["IDTASK"];
        $DESCRIPTION = $data["DESCRIPTION"];
        $COST = $data["COST"];
		$this->taskModel->update($IDTASK, $DESCRIPTION, $COST);
        $IDSPRINT = $data["IDSPRINT"];
        $IDUSER= $data["IDUSER"];
        $IDPROJECT=$data["IDPROJECT"];
        header("Location: /ConduiteDeProjet?p=ListTask&IDUSER=$IDUSER&IDPROJECT=$IDPROJECT&IDSPRINT=$IDSPRINT");
    }
		
    public function deleteTask($IDTASK, $IDUSER, $IDSPRINT, $IDPROJECT){
        $this->taskModel->delete($IDTASK);
        header("Location: /ConduiteDeProjet?p=ListTask&IDUSER=$IDUSER&IDPROJECT=$IDPROJECT&IDSPRINT=$IDSPRINT");
    }
}

