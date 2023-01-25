<?php

    class Crud{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = new mysqli("localhost","root","","dbsoftware");
        }

        public function conect(){
            return $this->conexion;
        }

    }

?>