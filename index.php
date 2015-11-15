<?php
include 'Controller/GlobalController.php';
$controller = new GlobalController();
if(isset($_GET["p"])){
    switch ($_GET["p"]) {
    	/*
			case 'home'             	 :$controller->userController->home();break;
			case 'authentify'	  	     :$controller->userController->authentify();break;
			case 'logout'       	     :$controller->userController->logout();break;
			case 'registerView'     	 :$controller->userController->registerView();break;
			case 'register'    		     :$controller->userController->register($_POST);break;
			case 'loginView'   	   	     :$controller->userController->loginView();break;
			case 'login'            	 :$controller->userController->login($_POST);break;

			case 'insertProject'   		 :$controller->projectController->insertProject($_POST);  break;
			case 'updateProject'   	     :$controller->projectController->updateProject($_POST);    break;
			case 'removeProject'  	     :$controller->projectController->removeProject($_GET["IDPROJECT"],$_GET["IDUSER"]);  break;
			case 'newProject' 			 :$controller->projectController->newProject();  break;
			case 'updateViewProject'   	 :$controller->projectController->updateProject($_GET["IDPROJECT"]);  break;
			case 'showProjects'		 	 :$controller->projectController->showAll($_GET["IDUSER"]);break;

			case 'insert' 			 	 :$controller->userStoryController->insert($_POST); break;
			case 'update' 				 :$controller->userStoryController->update($_POST); break;
			case 'remove' 				 :$controller->userStoryController->remove($_GET["IDUSERSTORY"], $_GET["IDPROJECT"], $_GET["IDUSER"]); 
			case 'new' 					 :$controller->userStoryController->newUserStory();                         break;
			case 'updateView'	 		 :$controller->userStoryController->updateUserStory($_GET["IDUSERSTORY"],$_GET["IDUSER"]);   break;
			case 'showUS'				 :$controller->userStoryController->showall($_GET["IDPROJECT"]);break; 
*/
			case 'insertSprint' 			 	 :$controller->sprintController->insert(); break;
			case 'updateSprint' 				 :$controller->sprintController->update(); break;
			case 'removeSprint' 				 :$controller->sprintController->remove(); break;
			case 'showSprint'					 :$controller->sprintController->showAll();break; 

			default 							 :$controller->sprintController->showAll(); break;
	}	
}
else {
	$controller->sprintController->insert();
     }