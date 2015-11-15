<?php
//require_once('GlobalController.php');
require_once('model/sprintModel.php');
class SprintController {
	private $sprintModel;//= new sprintModel();

    function __construct(){
		 $sprintModel= new sprintModel();
	
    }

	public function showAll(){
		if(!is_object($this->sprintModel))
			{echo"<font color='red' size='5'> this-_sprintModel N EST PAS UN OBJET</font>";}
	if(!is_object($this))
			{echo"<font color='red' size='5'>$this->sprintModel N EST PAS UN OBJET</font>";}
		//$sprint_s= $this->sprintModel->selectAll();

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

