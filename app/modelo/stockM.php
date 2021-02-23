<?php

    class stockM{


        private $db;


        public function __construct(){

            $this->db = new Base;
            
        }

        

        public function obtenerIdProductoItem(){

            $this->db->query('SELECT * FROM producto');

            $resultados = $this->db->registros();
            return $resultados;
        }

    
        public function obtenerIdItem($idItm){

            $this->db->query('SELECT * FROM itempedido WHERE idItemPedido = :idItemPedido');
            $this->db->bind(':idItemPedido', $idItm, PDO::PARAM_INT);

            $fila = $this->db->registro();

            return $fila;
        }
        
        public function obtenerItemInfo(){

            $this->db->query('SELECT * FROM itempedido');
            $resultados = $this->db->registros();

            return $resultados;

        }

        public function obtenerProductoItem(){

            $this->db->query('SELECT * FROM producto A JOIN itempedido B WHERE A.codProducto = B.codProducto');
            $resultados  = $this->db->registros();

            return $resultados;
        }


        public function agregarItem(){

            $this->db->query('INSERT INTO itempedido (codProducto)
                              SELECT A.codProducto
                              FROM producto A
                              WHERE NOT EXISTS (SELECT codProducto FROM itemPedido B WHERE A.codProducto = B.codProducto)');
            
            if($this->db->execute()){
                return true;
            
            }else{
                return false;
            }

        }

        public function editarStockItem($datos){

            $this->db->query('UPDATE itempedido SET stock = :stockProducto WHERE idItemPedido = :idItemPedido');
            
            $this->db->bind(':idItemPedido', $datos['idItem'], PDO::PARAM_INT);

            $this->db->bind(':stockProducto', $datos['cantidadP'], PDO::PARAM_INT);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }

        public function editarStockItemNulo($datos){

            $this->db->query('UPDATE itempedido SET stock = NULL WHERE idItemPedido = :idItemPedido');
            
            $this->db->bind(':idItemPedido', $datos['idItem'], PDO::PARAM_INT);

            $this->db->bind(':stockProducto', $datos['cantidadP'], PDO::PARAM_INT);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }
    }



?>