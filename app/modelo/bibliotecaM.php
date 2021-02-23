<?php

    class bibliotecaM{


        private $db;


        public function __construct(){

            $this->db = new Base;
            
        }

        public function cantidadProductos(){

            $this->db->query('SELECT * FROM producto A JOIN itempedido B WHERE A.codProducto = B.codProducto AND stock > 0');

            
            $resultados = $this->db->registros();

            

            return $resultados;
        }


        public function mostrarItemPorId($id){

            $this->db->query('SELECT * FROM producto A JOIN itempedido B WHERE A.codProducto = B.codProducto AND stock > 0 AND idItemPedido = :id');

            $this->db->bind(':id', $id, PDO::PARAM_INT);
            $resultados = $this->db->registros();

            

            return $resultados;
        }

        public function infoItemsCatalogo(){

            $this->db->query('SELECT nombreProducto FROM producto A JOIN itempedido B WHERE A.codProducto = B.codProducto');
            $resultados  = $this->db->registros();

            return $resultados;
        }

        
        publiC function agregarCarrito($datos){

            $this->db->query('INSERT INTO pedido(idItem) VALUES (:idItem)');

            $this->db->bind(':idItem', $datos['codItem'], PDO::PARAM_INT, 11);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        } 
        

}