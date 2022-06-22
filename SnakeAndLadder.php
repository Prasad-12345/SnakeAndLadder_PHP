<?php
    class SankeAndLadder{
        //variable
        private $startPosition = 0;
        private $previousPosition;

        //welcome message
        public function welcome(){
            echo "Welcome to the Snake And Ladder game \n";
            echo "Player starts from $this->startPosition \n";
        }

        //function to generate random number between 1 to 6
        public function rollDice(){
            $this->previousPosition = $this->startPosition;
            $this->startPosition = rand(1, 6);
            echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
        }
    }

    //object
    $game = new SankeAndLadder;
    $game->welcome();
    $game->rollDice();
?>