<?php

    class inicioC extends Controlador{

        public function __construct()
        {
            $this->usuarioModelo = $this->modelo('Usuario');
        }

        public function index(){
        

            $this->vista('paginas/inicio');
        }

        public function hola(){
            $this->vista('paginas/editar');
        }

        
    }

?>