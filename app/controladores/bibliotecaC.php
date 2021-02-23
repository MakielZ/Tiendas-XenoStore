<?php

    class bibliotecaC extends Controlador{

        public function __construct(){
            $this->bibliotecaM = $this->modelo('bibliotecaM');;
        }

        public function index(){

            $stockCount = $this->bibliotecaM->cantidadProductos();
            $info = $this->bibliotecaM->infoItemsCatalogo();


            $datos =  [
                'info' => $info,
                'cantidadProducto' => $stockCount,
            ];
            
            $l = [
                
            ];
            $this->vista('paginas/biblioteca', $datos, $l);

        }

        


        public function comprar($idItm){

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                

                $datos = [
                    'idItem' => $idItm,
                ];
 
                $this->vista('paginas/compra', $datos);
            }else{
                ;
                
 
             }

        }

        public function agregarProductoInv(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [ 
                     'codItem' => $_POST['idProductoInventario'],
                     'precioItem' => trim($_POST['precioProductoInventario'])
                 ]; 
 
                 if($this->bibliotecaM->agregarCarrito($datos)){
                     redireccionar('bibliotecaC');
                 }else{
                     die('Algo salio muy mal');
 
                 }
             }else{
                 $datos = [
                     'codItem' => '',
                     'precioItem' => ''
                     ];
 
                     $this->vista('paginas/comprar', $datos);
 
             }
        }
            
        


        
        
    }



?>