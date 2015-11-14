<?php
//require_once('GlobalController.php');
class SprintController {

    function __construct(){

    }

	public function showAll(){
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

