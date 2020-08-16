<?php

    class Controlador{
        
        public function modelo($modelo){
            
            require_once '../app/modelo/' . $modelo . '.php';
            return new $modelo();


        }

        public function vista($vista,$datos=[]){
              
            if(file_exists('../app/vistas/' . $vista . '.php')){
                require_once '../app/vistas/' . $vista . '.php';
            }else{
                die ('dfd');
            }

        }
    }


?>