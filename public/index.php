<?php
    require_once("../app/db/db.php");
    require_once("../app/controllers/MainController.php");

    $request = $_SERVER['REQUEST_URI'];
    $index = new MainController();

    switch ($request) {
        case '/' :
        case '' :
            $index->home();
            break;
        case '/save' :
            $index->save();
            break;
        default:
            $index->error();
            break;
    }

    
?>