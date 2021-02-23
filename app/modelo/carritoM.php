<?php

    class carritoM{


        private $db;


        public function __construct(){

            $this->db = new Base;
            
        }

        public function mostrarSeleccionado(){
            $this->db->query('SELECT * FROM pedido JOIN itemPedido ON idItem = idItemPedido JOIN producto ON producto.codProducto = itempedido.codProducto');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function cantidadItem(){

            $this->db->query('SELECT stock FROM ItemPedido JOIN pedido ON idItem = idItemPedido');

            $resultados = $this->db->registros();

            return $resultados;

        }

        public function descuentoItem($datos){

            $this->db->query('  UPDATE 
                                itempedido  A
                                JOIN
                                pedido B
                                ON
                                idItemPedido = idItem
                                SET 
                                stock = (stock - unidadesCompradas)
                                WHERE idItemPedido = :id
                                

                                ');
            
            $this->db->bind(':id', $datos['idItemCompra'], PDO::PARAM_INT);

           
           

            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }


        
    }



?>