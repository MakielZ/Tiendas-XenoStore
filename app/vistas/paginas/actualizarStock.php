<?php
   session_start();
   require_once RUTA_APP . '/vistas/inc/header-administrador.php'; 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="http://localhost/xenoStore/stockC">
                    Volver
                </a>   
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="container col-md-12 mt-4">
            
                <div class="mb-4">
                    <span class="btn-login btn-login-header" >Opciones</span>
                </div>


                <div class="card card-body mt-2">

                    <form action="<?php RUTA_URL;?><?php $datos['idItem']?>" method="POST">

                        <div class="form-group">
                            <label for="cantidadProducto">Introduzca existencia del producto</label>
                            <input type="text" name="cantidadProducto" class="form-control form-control-sm" value="<?php echo $datos['cantidadP']?>">
                        </div> 

                                        
                            <input type="submit" class="btn btn-dark" value="Actualizar producto">           
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>




<?php require_once '../app/vistas/inc/footer.php'; ?>
