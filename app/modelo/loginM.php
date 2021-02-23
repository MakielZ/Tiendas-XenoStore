<?php

    class loginM{

        private $db;

        public function __construct(){
            $this->db = new Base;
            
        }

        public function obtenerUsuarios(){
            $this->db->query("SELECT * FROM usuario where correoUsuario='' and contaseñaUsuario=''; ");
            $resultados = $this->db->registros();

            return $resultados;
        }

    }

?>