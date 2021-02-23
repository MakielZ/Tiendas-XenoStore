<?php

    class stockC extends Controlador{

        public function __construct(){
            $this->stockM = $this->modelo('stockM');
            
        }

        public function index(){

            $informacionItems = $this->stockM->obtenerItemInfo();
            $items = $this->stockM->obtenerProductoItem();
            $id = $this->stockM->obtenerIdProductoItem();

            $datos = [
                'consultaItems' => $items,
                'info' =>$informacionItems,
                'id' => $id
            ];

            $this->vista('paginas/stock', $datos);

        }
        
        public function agregarItem(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
 
                     'opInsertarItem' => trim($_POST['opcionesInsertarItem']),

                 ]; 
 
                 if($this->stockM->agregarItem($datos)){
                     redireccionar('stockC');
                 }else{
                     die('Algo salio muy mal');
 
                 }
             }else{
                 $datos = [
                     'opInsertarItem' => '',
                     ];
 
                     $this->vista('paginas/agregar', $datos);
 
             }
            
        }

        public function editar($idItm){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'idItem' => $idItm,
                    'cantidadP' => trim($_POST['cantidadProducto']),
                ]; 
 
                if($this->stockM->editarStockItem($datos)){
                    redireccionar('stockC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{

                $actualizacion = $this->stockM->obtenerIdItem($idItm);

                $datos = [
                    'idItem' => $actualizacion->idItemPedido ,
                    'cantidadP' => $actualizacion->stock
                ];
 
                $this->vista('paginas/actualizarStock', $datos);
 
             }

        }

        public function editarNulo($idItm){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'idItem' => $idItm,
                    'cantidadP' => trim($_POST['cantidadProducto']),
                ]; 
 
                if($this->stockM->editarStockItemNulo($datos)){
                    redireccionar('stockC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{

                $actualizacion = $this->stockM->obtenerIdItem($idItm);

                $datos = [
                    'idItem' => $actualizacion->idItemPedido ,
                    'cantidadP' => $actualizacion->stock
                ];
 
                $this->vista('paginas/actualizarStock', $datos);
 
             }
        }

        public function borrar(){

        }

}

?>