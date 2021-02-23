<?php

    class accionesC extends Controlador{

        public function __construct(){
            $this->accionesM = $this->modelo('accionesM');
            
        }

        public function index(){
            
            $tiposCategoria = $this->accionesM->obtenerRegistros();
            $producto = $this->accionesM->obtenerP();


            $datos = [
                'prod' => $producto,
                'tiposCategorias' => $tiposCategoria,
            ];

            $this->vista('paginas/actualizar', $datos);

        }

        public function reporte(){

            $tiposCategoria = $this->accionesM->obtenerRegistros();
            $producto = $this->accionesM->obtenerP();
 
            $datos = [
                'prod' => $producto,
                'tiposCategorias' => $tiposCategoria,
            ];
                
            $this->vista('paginas/reporte', $datos);
        }

        public function agregar(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

               $datos = [ 
                    'nProducto' => trim($_POST['nProducto']),
                    'deProducto' => trim($_POST['deProducto']),
                    'afProducto' => trim($_POST['afProducto']),
                    'pProducto' => trim($_POST['pProducto']),
                    'fProducto' => trim($_POST['fProducto']),
                    'fotoProducto' => subirFoto(),
                    'subProducto' => trim($_POST['subProducto'])
                    
                ]; 

                if($this->accionesM->agregarProducto($datos)){
                    redireccionar('accionesC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{
                $datos = [
                    'nProducto' => '',
                    'dProducto' => '',
                    'afProducto' => '',
                    'pProducto' => '',
                    'fProducto' => '',
                    'fotoProducto' =>'',
                    'sbProducto' => ''
                    ];

                    $this->vista('paginas/agregar', $datos);

            }
        }


        public function editar($idP){
           
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'id_Producto' => $idP,
                    'nProducto' => trim($_POST['nProducto']),
                    'deProducto' => trim($_POST['deProducto']),
                    'afProducto' => trim($_POST['afProducto']),
                    'pProducto' => trim($_POST['pProducto']),
                    'fProducto' => trim($_POST['fProducto'])
                 ]; 
 
                 if($this->accionesM->actualizarProducto($datos)){
                    redireccionar('accionesC');
                }else{
                    die('Algo salio mal');
                 }
             }else{

                 $actualizacion = $this->accionesM->obtenerPId($idP);

                 $datos = [
                     'id_Producto' => $actualizacion->codProducto,
                     'nProducto' => $actualizacion->nombreProducto,
                     'dProducto' => $actualizacion->descripcionProducto,
                     'afProducto' => $actualizacion->anoFabricacion,
                     'pProducto' => $actualizacion->precio,
                     'fProducto' => $actualizacion->fabricante
                     ];
 
                     $this->vista('paginas/editar', $datos);
 
             }
        }
 
        public function borrar($idP){

            $borrado = $this->accionesM->obtenerPId($idP);

            $datos = [
                'id_Producto' => $borrado->codProducto,
                'nProducto' => $borrado->nombreProducto,
                'dProducto' => $borrado->descripcionProducto,
                'afProducto' => $borrado->anoFabricacion,
                'pProducto' => $borrado->precio,
                'fProducto' => $borrado->fabricante,
            ];
           
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                     'id_Producto' => $idP
                ]; 
 
                if($this->accionesM->borrarProducto($datos)){
                    redireccionar('accionesC');

                }else{
                    die('Algo salio mal, no se ejecuto el borrado');
                }
             }

                $this->vista('paginas/borrar', $datos); 
    }

}

    function subirFoto(){

        $carpeta = __DIR__.'/../../public/uploads/';

        $archivo = $carpeta . $_FILES['fotoProducto']['name'];

        move_uploaded_file($_FILES['fotoProducto']['tmp_name'], $archivo);

        return $_FILES['fotoProducto']['name'];
    }

?>