<?php
    require_once("../app/db/db.php");
    require_once("../app/controllers/MainController.php");
    require_once("../app/controllers/GameController.php");
    require_once("../app/controllers/SpinWordsController.php");

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
        case '/ajaxRequest/exe/':
            echo $index->ajaxRequest();
            break;
        case '/playRockPaperScissors':
            $game = new GameController();
            echo $game->playRockPaperScissors("rock", "paper");
            echo $game->playRockPaperScissors("paper", "paper");
            echo $game->playRockPaperScissors("scissors", "paper");
            echo $game->playRockPaperScissors("paper", "scissors");
            break;
        case '/spinWords':
            $game = new SpinWordsController();
            echo $game->spinWords("Hey fellow warriors");
            $game = new SpinWordsController();
            echo $game->spinWords("This is rehtona test");
            break;
        default:
            $index->error();
            break;
    }

    
?>