/*
    File to establish a conection with the DB
*/
<?php

    class Connection{

        private $connection;

        public function __construct($server,$user,$password,$db){
            $this->connection = new mysqli($server,$user,$password,$db);
        }

        public function connect(){
            return $this->connection;
        }

    }

?>