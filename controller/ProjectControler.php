<?php

class ProjectControler {

    private $model;

    function __construct(){
       $this->model = new Project();
    }

    public function newProject(){
        //voir avec antoine la location
        include "view/addproject.php";
    }

    public function showAll(){
        $Project_s = $this->model->selectAll();
        //voir avec antoine la location
        include "view/projectlist.php";
    }

    public function updateProject($IDProject){
        $Project = $this->model->select($IDProject);
        //voir avec antoine la location
        include "view/updateproject.php";
    }

    public function insert($data){
        $IDUSER = $data["IDUSER"];
        $NAME = $data["NAME"];
        $NBCOLABORATORS= $data["NBCOLABORATORS"]
        $DESCRIPTION = $data["DESCRIPTION"];
		echo $this->model->insert($IDUSER,$NAME,$DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /...");
    }

    public function update($data){
		$IDUSER =(int) $data["IDUSER"];
        $NAME = $data["NAME"];
        $NBCOLABORATORS= $data["NBCOLABORATORS"]
        $DESCRIPTION = $data["DESCRIPTION"];
		echo $this->model->update($IDUSER, $NAME, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /...");
    }
	
    public function remove($IDProject){
        $this->model->delete($IDProject);
        //ADD LOCATION ...
        header("Location: /...");
    }

}
