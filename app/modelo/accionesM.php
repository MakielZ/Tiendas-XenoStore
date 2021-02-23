<?php

    class accionesM{

        private $db;

        public function __construct(){

            $this->db = new Base;
            
        }


        public function obtenerRegistros(){
            $this->db->query('SELECT * FROM subCategorias');
            $resultados = $this->db->registros();

            return $resultados;
        }

        public function obtenerP(){
            $this->db->query('SELECT * FROM producto');
            $resultados = $this->db->registros();

            return $resultados;
        }

        public function obtenerPId($idP){

            $this->db->query('SELECT * FROM producto WHERE codProducto = :codProducto');
            $this->db->bind(':codProducto', $idP, PDO::PARAM_INT);

            $fila = $this->db->registro();

            return $fila;
        }

        public function agregarProducto($datos){

            $this->db->query ( 'INSERT 
                                INTO 
                                producto(
                                nombreProducto, 
                                descripcionProducto, 
                                anoFabricacion, 
                                precio, 
                                fabricante,
                                foto,
                                idSubCategorias) 
                                VALUES(
                                :nombreProducto, 
                                :descripcionProducto, 
                                :anoFabricacion, 
                                :precio, 
                                :fabricante,
                                :foto,
                                :idSubCategorias)');

            $this->db->bind(':nombreProducto', $datos['nProducto'], PDO::PARAM_STR, 45);
            $this->db->bind(':descripcionProducto', $datos['deProducto'], PDO::PARAM_STR);
            $this->db->bind(':anoFabricacion', $datos['afProducto'], PDO::PARAM_INT);
            $this->db->bind(':precio', $datos['pProducto'], PDO::PARAM_STR);
            $this->db->bind(':fabricante', $datos['fProducto'], PDO::PARAM_STR);
            $this->db->bind(':foto', $datos['fotoProducto'], PDO::PARAM_STR);
            $this->db->bind(':idSubCategorias', $datos['subProducto'], PDO::PARAM_INT, 11);
            
            if($this->db->execute()){
                return true;
            
            }else{
                return false;
            }

        }

        public function actualizarProducto($datos){

            $this->db->query('  UPDATE 
                                producto 
                                SET 
                                nombreProducto = :nombreProducto, 
                                descripcionProducto = :descripcionProducto, 
                                anoFabricacion = :anoFabricacion, 
                                precio = :precio, 
                                fabricante = :fabricante 
                                WHERE 
                                codProducto = :codProducto');
            
            $this->db->bind(':codProducto', $datos['id_Producto'], PDO::PARAM_INT);

            $this->db->bind(':nombreProducto', $datos['nProducto'], PDO::PARAM_STR);
            $this->db->bind(':descripcionProducto', $datos['deProducto'], PDO::PARAM_STR);
            $this->db->bind(':anoFabricacion', $datos['afProducto'], PDO::PARAM_INT);
            $this->db->bind(':precio', $datos['pProducto'], PDO::PARAM_INT);
            $this->db->bind(':fabricante', $datos['fProducto'], PDO::PARAM_STR);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 
        }

        public function borrarProducto($datos){

            $this->db->query('DELETE FROM producto WHERE  codProducto = :codProducto');
            
            $this->db->bind(':codProducto', $datos['id_Producto'], PDO::PARAM_INT);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            } 

        }

        
        

    }
?>