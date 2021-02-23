<?php

    class loginC extends Controlador{

        public function __construct(){
            $this->loginM = $this->modelo('loginM');
            
        }

        public function index(){

            $usr = $this->loginM->obtenerUsuarios();

            $datoss = [
                'usr' => $usr
            ];
        $this->vista('paginas/login', $datoss);
        }

        
    }




?>