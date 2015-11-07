<?php

include 'controler.php';

class ProjectControler extends Controler{

    private $model;

    function __construct(){
       $this->model = new Project();
    }

    public function newProject(){
        //voir avec antoine la location
        include "View/addProject.php";
    }

    public function showAll(){
        $Project_s = $this->model->selectAll();
        //voir avec antoine la location
        include "View/projectList.php";
    }

    public function updateProject($PROJECTID){
        $Project = $this->model->select($PROJECTID);
        //voir avec antoine la location
        include "View/updateProject.php";
    }

    public function insertProject($data){
        //$IDUSER = $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->insert(1, $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /scrum");
    }

    public function update($data){
		$IDPROJECT =(int) $data["IDPROJECT"];
        //$IDUSER =(int) $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->update($IDPROJECT, 1, $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /scrum");
    }
	
    public function removeProject($PROJECTID){
        $this->model->delete($PROJECTID);
        //ADD LOCATION ...
        header("Location: /scrum");
    }

}
