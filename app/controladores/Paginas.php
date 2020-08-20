<?php

    class Paginas extends Controlador{

        public function index(){

            $datos = [ 

                'titulo' => " además de esto "

            ];

            $this->vista('paginas/inicio', $datos);
        }

        public function __construct(){
            $this->articuloModelo = $this->modelo('Articulo');
        }

        public function articulo($numero=null){
            echo $numero;
        }

        
    }

?>