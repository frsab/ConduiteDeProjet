<?php
require_once('controller/ProjectController.php');
require_once('controller/UserStoryController.php');
require_once('controller/UserController.php');
require_once('controller/SprintController.php');
require_once('Controller/GlobalController.php');
$controller = new GlobalController();
$userController = new UserController();
$projectController = new ProjectController();
$userStoryController = new UserStoryController();
$sprintController = new SprintController();

if(isset($_GET["p"]))
    switch ($_GET["p"]) {
/*		
        case 'home'                  :$userController->home();break;
        case 'authentify'            :$userController->authentify();break;
        case 'logout'                :$userController->logout();break;
        case 'registerView'          :$userController->registerView();break;
        case 'register'              :$userController->register($_POST);break;
        case 'loginView'             :$userController->loginView();break;
        case 'login'                 :$userController->login($_POST);break;

        case 'insertProject'         :$projectController->insertProject($_POST);  break;
        case 'updateProject'         :$projectController->update($_POST);    break;
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

        case 'deleteSprint'          :$sprintController->deleteSprint($_GET["IDSPRINT"]); break;
        case 'updateUsSprint'        :$sprintController->updateUsSprint($_GET["IDSPRINT"]); break;
        case 'addSprint'             :$sprintController->addSprint(); break;
        case 'insertSprint'          :$sprintController->insert(); break;
        case 'updateSprint'          :$sprintController->update(); break;
        case 'removeSprint'          :$sprintController->remove(); break;
        case 'showSprint'            :$sprintController->showAll();break;
        case 'ajouterSprint'         :$sprintController->ajouterSprint($_POST);break; 
        case 'showSprintUs'          :$sprintController->showSprintUs($_POST);break; 
*/

            case 'showSprintBacklog'             :$controller->sprintController->showAllSprintBacklog();break;
            case 'showPlanning'                  :$controller->sprintController->showplanning();break;
            case 'deleteSprint'                  :$controller->sprintController->deleteSprint($_GET["IDSPRINT"]); break;
            case 'updateUsSprint'                :$controller->sprintController->updateUsSprint($_GET["IDSPRINT"]); break;
            case 'addSprint'                     :$controller->sprintController->addSprint(); break;
            case 'insertSprint'                  :$controller->sprintController->insert(); break;
            case 'updateSprint'                  :$controller->sprintController->updateSprint(); break;
            case 'removeSprint'                  :$controller->sprintController->remove(); break;
            case 'showSprint'                    :$controller->sprintController->showAll();break;
            case 'SprintBacklog'                 :$controller->sprintController->showAll();break;
           case 'moveUsToNotAssignedUS'          :$controller->sprintController->moveUsToNotAssignedUS();break;
           case 'moveUsToSprintUS'               :$controller->sprintController->moveUsToSprintUS();break;
            case 'ajouterSprint'                 :$controller->sprintController->ajouterSprint($_POST);break; 
            default                              :$controller->sprintController->showplanning(); break;
       
}
else {
   $controller->sprintController-> showplanning();
     }

     /*
        default :   include 'view/home.php'; break;    
    
    }else {
        include 'view/home.php';
    }*/