<?php
require_once('Controller/ProjectController.php');
require_once('Controller/userStoryController.php');
require_once('Controller/userController.php');

$userController = new UserController();
$projectController = new ProjectController();
$userStoryController = new UserStoryController();

if(isset($_GET["p"]))
    switch ($_GET["p"]) {
        case 'home'                  :$userController->Controller->home();break;
        case 'authentify'            :$userController->authentify();break;
        case 'logout'                :$userController->logout();break;
        case 'registerView'          :$userController->registerView();break;
        case 'register'              :$userController->register($_POST);break;
        case 'loginView'             :$userController->loginView();break;
        case 'login'                 :$userController->login($_POST);break;

        case 'insertProject'         :$projectController->insertProject($_POST);  break;
        case 'updateProject'         :$projectController->updateProject($_POST);    break;
        case 'removeProject'         :$projectController->removeProject($_GET["IDPROJECT"],$_GET["IDUSER"]);  break;
        case 'newProject'            :$projectController->newProject();  break;
        case 'updateViewProject'     :$projectController->updateProject($_GET["IDPROJECT"]);  break;
        case 'showProjects'          :$projectController->showAll($_GET["IDUSER"]);break;

        case 'insert'                :$userStoryController->insert($_POST); break;
        case 'update'                :$userStoryController->update($_POST); break;
        case 'remove'                :$userStoryController->remove($_GET["IDUSERSTORY"], $_GET["IDPROJECT"], $_GET["IDUSER"]); 
        case 'new'                   :$userStoryController->newUserStory();                         break;
        case 'updateView'            :$userStoryController->updateUserStory($_GET["IDUSERSTORY"],$_GET["IDUSER"]);   break;
        case 'showUS'                :$userStoryController->showall($_GET["IDPROJECT"]);break; 
        case 'helpbacklog'           :$userStoryController->showHelpBacklog($_GET["IDUSER"], $_GET["IDPROJECT"]);break; 

        default :   include 'view/home.php'; break;    
    
    }else {
        include 'view/home.php';
    }