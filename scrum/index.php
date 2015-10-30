<?php

include 'Model/userstory.php';
include 'Controller/userStoryControler.php';

$controller = new UserStoryControler();

if(isset($_GET["p"]))
    switch ($_GET["p"]) {
        case 'insert'   : $controller->insert($_POST); break;
        case 'update'   : $controller->update($_POST); break;
        case 'remove'   : $controller->remove($_GET["IDUSERSTORY"]); break;
        case 'new' 		: $controller->newUserStory(); break;
        case 'updateview'   : $controller->updateUserStory($_GET["IDUSERSTORY"]); break;
        default : $controller->showAll(); break;
    }
else $controller->showAll();

