<?php

    class Paginas extends Controlador{

        public function index(){
            $this->vista('paginas/inicio');
        }

        public function __construct(){
            $this->articuloModelo = $this->modelo('Articulo');
        }

        public function articulo($numero=null){
            echo $numero;
        }

        public function articulos(){
            $this->vista('paginas/biblioteca');
        }

        
    }

?>