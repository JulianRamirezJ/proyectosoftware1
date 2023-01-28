<?php
    class Connection{
        private $connec;

        public function __construct($server,$user,$password,$db){
            $this->connec = new mysqli($server,$user,$password,$db);
        }

        public function connect(){
            return $this->connec;
        }

    }
?>