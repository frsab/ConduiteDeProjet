<?php

require_once('GlobalController.php');

//include 'Controller.php';

class ProjectController {


    function __construct(){
    }

    public function newProject(){
        //voir avec antoine la location
        include "view/addproject.php";
    }

    public function showAll($IDUSER){
        //session_start();
        //$userName =  $_SESSION['nameproject'];
        
        //$userId = $this->model->selectIdUserBayName($userName);
        
        //$Project_s = $this->model->selectAllByUser($userId['iduser']);
        //voir avec antoine la location
        //include "View/projectList.php";
    

        $Project_s = $super->model->selectAll($IDUSER);
        //voir avec antoine la location
        include "view/projectList.php";
    }

    public function updateProject($PROJECTID){
        $Project = $this->model->select($PROJECTID);
        //voir avec antoine la location
        include "view/updateproject.php";
    }

    public function insertProject($data){
        /*
        $IDUSER = $data["IDUSER"];
        session_start();
        $userName =  $_SESSION['nameproject'];
        
        $IDUSER = $this->model->selectIdUserBayName($userName);
        
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
        echo $this->model->insert($IDUSER['iduser'], $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet");
        */

        $IDUSER = $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->insert($IDUSER, $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }

    public function update($data){
		/*
        session_start();
        $userName =  $_SESSION['nameproject'];
        $IDUSER = $this->model->selectIdUserBayName($userName);
        
        
        $IDPROJECT =(int) $data["IDPROJECT"];
        //$IDUSER =(int) $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
        echo $this->model->update($IDPROJECT, $IDUSER['iduser'], $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet");
        */


        $IDPROJECT =(int) $data["IDPROJECT"];
        $IDUSER =(int) $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->update($IDPROJECT, $IDUSER, $NAME, $NBCOLABORATORS, $STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }
	
    public function removeProject($PROJECTID, $IDUSER){
        $this->model->delete($PROJECTID);
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }

}
