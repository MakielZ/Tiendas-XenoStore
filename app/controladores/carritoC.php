<?php

    class carritoC extends Controlador{

        public function __construct(){
            $this->carritoM = $this->modelo('carritoM');;
        }

        public function index(){

            $mostrarProductosComprados = $this->carritoM->mostrarSeleccionado();

            $datos = [
                'productosComprados' => $mostrarProductosComprados
            ];
          
            $this->vista('paginas/carrito', $datos);

        }

        public function agregarProductoInv(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [ 
                     'codItem' => trim($_POST['idItemPedido']),
                     'nombreItem' => trim($_POST['nombreProductoInventario']),
                     'precioItem' => trim($_POST['precioProductoInventario']),
                 ]; 
 
                 if($this->carritoM->agregarCarrito($datos)){
                     redireccionar('bibliotecaC');
                 }else{
                     die('Algo salio muy mal');
 
                 }
             }else{
                 $datos = [
                     'codItem' => '',
                     'nombreItem' => '',
                     'precioItem' => ''
                     ];
 
                     $this->vista('paginas/carritoC', $datos);
 
             }
        }


        public function finalizarCompra(){
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'idItemCompra' => trim($_POST['idItemCompra']),
                    'stockCompra' => trim($_POST['stockCompra']),
                    'cantidadCompra' => trim($_POST['cantidadCompra'])
                  
                 ]; 
 
                 if($this->carritoM->descuentoItem($datos)){
                    redireccionar('exitoC');
                }else{
                    die('Algo salio mal');
                 }
             }else{

                 $datos = [
                    'id_Producto' => trim($_POST['idItemCompra']),
                    'nProducto' => trim($_POST['stockCompra']),
                    'deProducto' => trim($_POST['cantidadCompra'])
                 ];
                     $this->vista('paginas/carrito', $datos);
        }
        
    
        
        
    }


}

?>