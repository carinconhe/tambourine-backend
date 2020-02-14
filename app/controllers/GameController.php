<?php
class GameController {
    protected $restrictions = [
                                'rock' => 'scissors',
                                'paper' => 'rock',
                                'scissors' => 'paper'
                            ];

    public function playRockPaperScissors( $player1, $player2 ){
        if($player1===$player2){
            return "Draw<br>";
        }else if($this->restrictions[$player1]===$player2){
            return  "Winner Player 1.<br>";
        }else
            return "Winner Player 2.<br>";
        
    }

}

?>