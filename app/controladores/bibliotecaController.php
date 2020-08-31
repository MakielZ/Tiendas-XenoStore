<?php

    class bibliotecaController extends Controlador{

        public function index(){
            $this->vista('paginas/biblioteca');

        }

        public function __construct(){
            echo 'Esto si se cargo';
        }
    }



?>