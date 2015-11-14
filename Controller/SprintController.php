<?php
require_once('GlobalController.php');
class SprintController {

    function __construct(){

    }
   public function showAll(){
//        $sprint_s = $this->model->selectAll($IDPROJECT);
        include "view/backlog.php";
    }

}

