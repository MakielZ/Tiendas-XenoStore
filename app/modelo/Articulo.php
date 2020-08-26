<?php

    class Articulo{

        private $db;

        public function __construct(){
            $this->db = new Base;
            
        }

        public function obtenerArticulos(){
            $this->db->query("SELECT * FROM articulos");

            return $this->db->registros();
        }

        public function cuenta(){
            $this->db->query("SELECT* FROM articulos");

            return $this->db->registro();
        }
    }

?>