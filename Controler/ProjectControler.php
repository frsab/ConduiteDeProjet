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
		session_start();
		$userName =  $_SESSION['nameproject'];
		
		$userId = $this->model->selectIdUserBayName($userName);
		
        $Project_s = $this->model->selectAllByUser($userId['iduser']);
        //voir avec antoine la location
        include "View/projectList.php";
    }
	/*
	public function showAllByUser(){
        $Project_s = $this->model->selectAll();
        //voir avec antoine la location
        include "View/projectList.php";
    }
	*/
	public function register(){
       
        include "View/registration.php";
    }
	public function login(){
        //$Project_s = $this->model->selectAll();
        //voir avec antoine la location
        include "View/login.php";
    }
	
		
	public function logout(){
       
        include "View/logout.php";
    }
	public function authentify(){
        //$Project_s = $this->model->selectAll();
        //voir avec antoine la location
        include "View/login.php";
    }

    public function updateProject($IDProject){
        $Project = $this->model->select($IDProject);
        //voir avec antoine la location
        include "View/updateProject.php";
    }

    public function insertProject($data){
        //$IDUSER = $data["IDUSER"];
		session_start();
		$userName =  $_SESSION['nameproject'];
		
		$IDUSER = $this->model->selectIdUserBayName($userName);
		
        $NAME = $data["projectName"];
        $NBCOLABORATORS= $data["nbColaborators"];
        $STATUS= $data["status"];
        $DESCRIPTION = $data["description"];
		echo $this->model->insert($IDUSER['iduser'], $NAME, $NBCOLABORATORS,$STATUS, $DESCRIPTION);
        //ADD LOCATION ...
        header("Location: /scrum");
    }

    public function update($data){
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
        header("Location: /scrum");
    }
	
    public function removeProject($IDProject){
        $this->model->delete($IDProject);
        //ADD LOCATION ...
        header("Location: /scrum");
    }

}
