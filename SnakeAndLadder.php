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
            //$this->previousPosition = $this->startPosition;
            $diceNum = rand(1, 6);
            //echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
            return $diceNum;
        }

        //Function to generate random number between 1 to 3
        public function option(){
            return rand(1, 3);
        }

        //Function to decide next position of player
        public function nextMove($diceNum){    
            $choice = $this->option();
            $this->previousPosition = $this->startPosition;
            switch($choice){
                case 1:
                    $this->startPosition = $this->startPosition;
                    echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
                    break;

                case 2:
                    $this->startPosition += $diceNum;
                    echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
                    break;

                case 3:
                    $this->startPosition -= $diceNum;
                    echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
                    break;
            }
        }
    }

    //object
    $game = new SankeAndLadder;
    $game->welcome();
    $diceNum = $game->rollDice();
    $game->nextMove($diceNum);
?>