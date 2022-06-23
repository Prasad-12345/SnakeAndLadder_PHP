<?php
    class SankeAndLadder{
        //variable
        public $startPosition = 0;
        private $previousPosition;
        private $diceNum;
        private $count = 0;

        //welcome message
        public function welcome(){
            echo "Welcome to the Snake And Ladder game \n";
            echo "Player starts from $this->startPosition \n";
        }

        //function to generate random number between 1 to 6
        public function rollDice(){
            $this->diceNum = rand(1, 6);
            $this->count++;
            echo "Number of times dice rolled :" . $this->count . "____";
            //echo "Previous Position :" . $this->previousPosition . " " . "StartPosition :" . $this->startPosition;
            return $this->diceNum;
        }

        //Function to generate random number between 1 to 3
        public function option(){
            return rand(1, 3);
        }

        //Function to decide next position of player
        public function nextMove($choice){   
                $this->previousPosition = $this->startPosition;
                switch($choice){
                    case 1:
                        $this->startPosition = $this->startPosition;
                        echo "Previous Position :" . $this->previousPosition . "____" . "StartPosition :" . $this->startPosition . "\n";
                        break;
    
                    case 2:
                        $this->startPosition += $this->diceNum;
                        if($this->startPosition < 100){
                            echo "Previous Position :" . $this->previousPosition . "____" . "StartPosition :" . $this->startPosition . "\n";
                        }
                        elseif($this->startPosition > 100){
                            $this->startPosition = $this->previousPosition;
                            echo "Previous Position :" . $this->previousPosition . "____" . "StartPosition :" . $this->startPosition . "\n";
                        }
                        elseif($this->startPosition == 100){
                            echo "Previous Position :" . $this->previousPosition . "____" . "StartPosition :" . $this->startPosition . "\n";
                            echo "Player won the game";
                        }
                        break;
    
                    case 3:
                        $this->startPosition -= $this->diceNum;
                        if($this->startPosition < 0){
                            $this->startPosition = 0;
                        }
                        echo "Previous Position :" . $this->previousPosition . "____" . "StartPosition :" . $this->startPosition . "\n";
                        break;
                }
            
            } 
        
    }

    //object
    $game = new SankeAndLadder();
    $game->welcome();
    while($game->startPosition < 100){
        $game->rollDice();
        $choice = $game->option();
        $game->nextMove($choice);
    }  
?>