<?php
require_once('model/Model.php');
require_once('UserController.php');
require_once('UserStoryController.php');
require_once('ProjectController.php');
require_once('SprintController.php');
require_once('TaskController.php'); 
class GlobalController {
    private  $model;
    private  $userController;
    private  $userStoryController;
    private  $projretController;
    public  $sprintController;
    public  $taskController;
    

    function __construct(){
       $this->model = Model::getInstance();
       $this->userController=new UserController();
       $this->userStoryController=new UserStoryController();
       $this->projectController=new ProjectController();
       $this->sprintController=new SprintController($this->model);
       $this->taskController=new TaskController($this->model);
    }



}
