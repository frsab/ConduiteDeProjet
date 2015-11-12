<?php
require_once('model/Model.php');
require_once('UserController.php');
require_once('UserStoryController.php');
require_once('ProjectController.php');
class GlobalController {
    private  $model;
    private  $userController;
    private  $userStoryController;
    private  $projretController;
    

    function __construct(){
       $this->model = Model::getInstance();
       $this->userController=new UserController();
       $this->userStoryController=new UserStoryController();
       $this->projectController=new ProjectController();
    }


}
