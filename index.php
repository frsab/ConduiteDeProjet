<?php
//*
//include 'Controller/userStoryController.php';
//*/
//include 'Controller/ProjectController.php';
//include 'Controller/userStoryController.php';

//$Controller = new ProjectController();
//$Controller2 = new UserStoryController();


if(isset($_GET["p"]))
    switch ($_GET["p"]) {
        case 'home'             : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->home();
                                }break;

        case 'authentify'       : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->authentify();
                                }break;

        case 'logout'           : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->logout();
                                }break;

        case 'registerView'     : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->registerView();
                                }break;

        case 'register'         : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->register($_POST);
                                }break;

        case 'loginView'        : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->loginView();
                                }break;

        case 'login'            : {
                                    include 'Controller/UserController.php';
                                    $Controller = new UserController();
                                    $Controller->login($_POST);
                                }break;

    	case 'insertProject'    : {
                                    include 'Controller/ProjectController.php';
                                    $Controller = new ProjectController();
                                    $Controller->insertProject($_POST); 
                                }break;

        case 'updateProject'   : {
                                    include 'Controller/ProjectController.php';
                                    $Controller = new ProjectController();
                                    $Controller->update($_POST); 
                                }break;

        case 'removeProject'   : {
                                    include 'Controller/ProjectController.php';
                                    $Controller = new ProjectController();
                                    $Controller->removeProject($_GET["IDPROJECT"],$_GET["IDUSER"]); 
                                }break;

        case 'newProject' 		: {
                                    include 'Controller/ProjectController.php';
                                    $Controller = new ProjectController();
                                    $Controller->newProject(); 
                                }break;

        case 'updateViewProject'   : {
                                        include 'Controller/ProjectController.php';
                                        $Controller = new ProjectController();
                                        $Controller->updateProject($_GET["IDPROJECT"]); 
                                    }break;

        case 'showProjects'			: {
                                        include 'Controller/ProjectController.php';
                                        $Controller = new ProjectController();
                                        $Controller->showAll($_GET["IDUSER"]);
                                    }break;
        //*
        case 'insert'   : {
                            include 'Controller/userStoryController.php';
                            $Controller = new UserStoryController();
                            $Controller->insert($_POST); 
                        }break;

        case 'update'   : {
                            include 'Controller/userStoryController.php';
                            $Controller = new UserStoryController();
                            $Controller->update($_POST); 
                        }break;

        case 'remove'   : {
                            include 'Controller/userStoryController.php';
                            $Controller = new UserStoryController();
                            $Controller->remove($_GET["IDUSERSTORY"], $_GET["IDPROJECT"], $_GET["IDUSER"]); 
                        }break;

        case 'new' 		: {
                            include 'Controller/userStoryController.php';
                            $Controller = new UserStoryController();
                            $Controller->newUserStory(); 
                        }break;
        
        case 'updateView': {
                            include 'Controller/userStoryController.php';
                            $Controller = new UserStoryController();
                            $Controller->updateUserStory($_GET["IDUSERSTORY"],$_GET["IDUSER"]); 
                        }break;
        
        case 'showUS': {
                        include 'Controller/userStoryController.php';
                        $Controller = new UserStoryController();
                        $Controller->showall($_GET["IDPROJECT"]);
                    }break; 
        //*/
        default : {
                    include 'Controller/ProjectController.php';
                    $Controller = new ProjectController();
                    $Controller->showAll(); 
                }break;
    }
else {
        include 'View/home.php';
    }