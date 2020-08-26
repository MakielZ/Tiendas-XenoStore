<?php

    class Paginas extends Controlador{

        public function index(){

            $articulos = $this->articuloModelo->obtenerArticulos();
            $cuenta = $this->articuloModelo->cuenta();

            $datos = [ 

                'titulo' => " además de esto ",
                'articulos' => $articulos,
                'cuenta' => $cuenta

            ];

            $this->vista('paginas/inicio', $datos);
        }

        public function __construct(){
            echo 'Este controlador no existe';
            $this->articuloModelo = $this->modelo('Articulo');
        }

        public function articulo($numero=null){
            echo $numero;
        }

        
    }

?>