<?php

require_once('model/projectModel.php');

class ProjectController {

    private $model;

    function __construct(){
       $this->model = new Project();
    }

    public function newProject(){
        include "view/addproject.php";
    }

    public function showAll($IDUSER){
        $Project_s = $this->model->selectAll($IDUSER);
        include "view/projectList.php";
    }

    public function updateProject($PROJECTID){
        $Project = $this->model->select($PROJECTID);
        include "view/updateproject.php";
    }

    public function insertProject($data){
        $IDUSER = $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->insert($IDUSER, $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }

    public function update($data){
        $IDPROJECT =(int) $data["IDPROJECT"];
        $IDUSER =(int) $data["IDUSER"];
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->update($IDPROJECT, $IDUSER, $NAME, $NBCOLABORATORS, $STATUS, $DESCRIPTION);
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }
	
    public function removeProject($PROJECTID, $IDUSER){
        $this->model->delete($PROJECTID);
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER);
    }

}
