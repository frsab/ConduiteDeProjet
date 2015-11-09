<?php
/*
include 'Model/userstory.php';
include 'Controller/userStoryControler.php';
include 'Controller/ProjectControler.php';
include 'Model/projectModel.php';
//*/
include 'Controler/Projectcontroler.php';
include 'Model/ProjectModel.php';

$controller = new ProjectControler();
//$controller2 = new ProjectControler();


if(isset($_GET["p"]))
    switch ($_GET["p"]) {
    	case 'insertProject'   : $controller->insertProject($_POST); break;
        case 'updateProject'   : $controller->update($_POST); break;
        case 'removeProject'   : $controller->removeProject($_GET["IDPROJECT"]); break;
        case 'newProject' 		: $controller->newProject(); break;
        case 'updateviewProject'   : $controller->updateProject($_GET["IDPROJECT"]); break;
        case 'showProjects'			: $controller->showAll();break;
		case 'authentify'			: $controller->authentify();break;
		case 'logout'			: $controller->logout();break;
		case 'register'			: $controller->register();break;
		case 'login'			: $controller->login();break;
        /*
        case 'insert'   : $controller->insert($_POST); break;
        case 'update'   : $controller->update($_POST); break;
        case 'remove'   : $controller->remove($_GET["IDUSERSTORY"]); break;
        case 'new' 		: $controller->newUserStory(); break;
        case 'updateview'   : $controller->updateUserStory($_GET["IDUSERSTORY"]); break;
        //*/
		
		
        default : $controller->showAll(); break;
    }
//else $controller->showAll();
else $controller->login();