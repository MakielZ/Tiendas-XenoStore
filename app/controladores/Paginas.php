<?php

    class Paginas extends Controlador{

        public function index(){

            $articulos = $this->articuloModelo->obtenerArticulos();
            $cuenta = $this->articuloModelo->cuenta();

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

        public function articulos(){
            $this->vista('paginas/biblioteca');
        }

        
    }

?>