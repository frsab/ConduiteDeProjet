<?php
/*
include 'Controler/userStoryControler.php';
//*/
//include 'Controler/Projectcontroler.php';
//include 'Controler/userStoryControler.php';

//$controller = new ProjectControler();
//$controller2 = new UserStoryControler();


if(isset($_GET["p"]))
    switch ($_GET["p"]) {
    	case 'insertProject'   : {
                                    include 'Controler/Projectcontroler.php';
                                    $controller = new ProjectControler();
                                    $controller->insertProject($_POST); 
                                }break;

        case 'updateProject'   : {
                                    include 'Controler/Projectcontroler.php';
                                    $controller = new ProjectControler();
                                    $controller->update($_POST); 
                                }break;

        case 'removeProject'   : {
                                    include 'Controler/Projectcontroler.php';
                                    $controller = new ProjectControler();
                                    $controller->removeProject($_GET["IDPROJECT"]); 
                                }break;

        case 'newProject' 		: {
                                    include 'Controler/Projectcontroler.php';
                                    $controller = new ProjectControler();
                                    $controller->newProject(); 
                                }break;

        case 'updateviewProject'   : {
                                        include 'Controler/Projectcontroler.php';
                                        $controller = new ProjectControler();
                                        $controller->updateProject($_GET["IDPROJECT"]); 
                                    }break;

        case 'showProjects'			: {
                                        include 'Controler/Projectcontroler.php';
                                        $controller = new ProjectControler();
                                        $controller->showAll();
                                    }break;
        //*
        case 'insert'   : {
                            include 'Controler/userStoryControler.php';
                            $controller = new UserStoryControler();
                            $controller->insert($_POST); 
                        }break;

        case 'update'   : {
                            include 'Controler/userStoryControler.php';
                            $controller = new UserStoryControler();
                            $controller->update($_POST); 
                        }break;

        case 'remove'   : {
                            include 'Controler/userStoryControler.php';
                            $controller = new UserStoryControler();
                            $controller->remove($_GET["IDUSERSTORY"],$_GET["IDPROJECT"]); 
                        }break;

        case 'new' 		: {
                            include 'Controler/userStoryControler.php';
                            $controller = new UserStoryControler();
                            $controller->newUserStory(); 
                        }break;
        
        case 'updateview': {
                            include 'Controler/userStoryControler.php';
                            $controller = new UserStoryControler();
                            $controller->updateUserStory($_GET["IDUSERSTORY"]); 
                        }break;
        
        case 'showUS': {
                        include 'Controler/userStoryControler.php';
                        $controller = new UserStoryControler();
                        $controller->showall($_GET["IDPROJECT"]);
                    }break; 
        //*/
        default : {
                    include 'Controler/Projectcontroler.php';
                    $controller = new ProjectControler();
                    $controller->showAll(); 
                }break;
    }
else {
        include 'Controler/Projectcontroler.php';
        $controller = new ProjectControler();
        $controller->showAll();
    }