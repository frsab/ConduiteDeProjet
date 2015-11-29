<?php
require_once('Controller/ProjectController.php');
require_once('Controller/userStoryController.php');
require_once('Controller/userController.php');
require_once('Controller/SprintController.php');
require_once('Controller/TaskController.php');
require_once('Controller/GlobalController.php');

$controller = new GlobalController();
$userController = new UserController();
$projectController = new ProjectController();
$userStoryController = new UserStoryController();
$sprintController = new SprintController();
$taskController = new TaskController();

if(isset($_GET["p"]))
    switch ($_GET["p"]) {
		
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

        case 'deleteSprint'          :$sprintController->deleteSprint($_GET["IDSPRINT"], $_GET["IDPROJECT"], $_GET["IDUSER"]); break;
        case 'updateUsSprint'        :$sprintController->updateUsSprint($_GET["IDSPRINT"]); break;
        case 'addSprint'             :$sprintController->addSprint(); break;
        case 'insertSprint'          :$sprintController->insert(); break;
        case 'updateSprint'          :$sprintController->update(); break;
        case 'removeSprint'          :$sprintController->remove(); break;

//        case 'showSprint'            :$sprintController->showAll($_GET["IDPROJECT"]);break;
        case 'ajouterSprint'         :$sprintController->ajouterSprint($_POST);break; 
        case 'showSprintUs'          :$sprintController->showSprintUs($_GET["IDSPRINT"], $_GET["IDPROJECT"]);break;
        case 'helpSprint'            :$sprintController->showHelpSprint($_GET["IDUSER"], $_GET["IDPROJECT"]);break;
        case 'showKanban'            :$sprintController->showKanban($_GET["IDSPRINT"]);break;
        case 'showHelpKanban'        :$sprintController->showHelpKanban();break;
            # code...
            break;
            # code...
            break;
        //new added
        case 'showSprint'                    :$controller->sprintController->showAll($_GET["IDUSER"],$_GET["IDPROJECT"]);break;
        case 'showSprintBacklog'             :$controller->sprintController->showAllSprintBacklog();break;
        case 'showPlanning'                  :$controller->sprintController->showplanning();break;
        case 'deleteSprint'                  :$controller->sprintController->deleteSprint($_GET["IDSPRINT"]); break;
        case 'updateUsSprint'                :$controller->sprintController->updateUsSprint($_GET["IDSPRINT"]); break;
        case 'addSprint'                     :$controller->sprintController->addSprint(); break;
        case 'insertSprint'                  :$controller->sprintController->insert(); break;
        case 'updateSprint'                  :$controller->sprintController->updateSprint(); break;
        case 'removeSprint'                  :$controller->sprintController->remove(); break;
        case 'SprintBacklog'                 :$controller->sprintController->showAll();break;
        case 'moveUsToNotAssignedUS'          :$controller->sprintController->moveUsToNotAssignedUS($_GET["IDUSERSTORYNotAssignedUS"],$_GET["IDSPRINTNotAssignedUS"]);break;
        case 'moveUsToSprintUS'               :$controller->sprintController->moveUsToSprintUS($_GET["IDUSERSTORY"],$_GET["IDSPRINT"]);break;
        case 'ajouterSprint'                 :$controller->sprintController->ajouterSprint($_POST);break; 


        case 'moveUsToNotAssignedUS' :$sprintController->moveUsToNotAssignedUS($_GET["IDUSERSTORYNotAssignedUS"],$_GET["IDSPRINTNotAssignedUS"]);break;
        case 'moveUsToSprintUS'      :$sprintController->moveUsToSprintUS($_GET["IDUSERSTORY"],$_GET["IDSPRINT"]);break;
            
        case 'ListTask'              :$taskController->ListTask($_GET["IDSPRINT"]);break; 
        case 'addTask'               :$taskController->addTask($_GET["IDSPRINT"]);break; 
        case 'updateTask'            :$taskController->updateTask($_GET["IDTASK"]);break;
        case 'validateUpdate'        :$taskController->update($_POST);break; 
        case 'DeleteTaskFromSprint'  :$taskController->deleteTask($_GET["IDTASK"], $_GET["IDUSER"], $_GET["IDSPRINT"], $_GET["IDPROJECT"]);break; 
        case 'ajouterTask'           :$taskController->ajouterTask($_POST);break;   
        case 'helptTasks'            :$taskController->showHelpTasks($_GET["IDUSER"], $_GET["IDPROJECT"]);break;

        default :   include 'view/home.php'; break;    
    
    }else {
        include 'view/home.php';
    }