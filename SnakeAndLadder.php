<?php
    class SankeAndLadder{
        //variable
        private $startPosition = 0;

        //welcome message
        public function welcome(){
            echo "Welcome to the Snake And Ladder game \n";
            echo "Player starts from $this->startPosition";
        }
    }
?>