<?php

    class Paginas extends Controlador{

        public function index(){

            $articulos = $this->articuloModelo->obtenerArticulos();

            $datos = [ 

                'titulo' => " además de esto ",
                'articulos' => $articulos

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