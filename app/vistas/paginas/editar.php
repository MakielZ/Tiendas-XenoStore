<?php
   session_start();
   require_once RUTA_APP . '/vistas/inc/header-administrador.php'; 
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="http://localhost/xenoStore/accionesC">
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

                    <form action="<?php RUTA_URL;?><?php $datos['id_Producto']?>" method="POST">

                        <div class="form-group">
                            <label for="nProducto">Producto</label>
                            <input type="text" name="nProducto" class="form-control form-control-sm" value="<?php echo $datos['nProducto']?>">
                        </div> 

                        <div class="form-group">
                            <label for=deProducto">Descripcion</label>
                            <textarea class="form-control" name="deProducto" rows="4"><?php echo $datos['dProducto']?></textarea>
                        </div> 
                        
                        <div class="form-group">
                            <label for="afProducto">Año de fabricacion</label>
                            <input type="text" name="afProducto" class="form-control form-control-sm" value="<?php echo $datos['afProducto']?>">
                        </div>  

                        <div class="form-group">
                            <label for="pProducto">Precio</label>
                            <input type="text" name="pProducto" class="form-control form-control-sm" value="<?php echo $datos['pProducto']?>">
                        </div> 

                        <div class="form-group">
                            <label for="fProducto">Fabricante</label>
                            <input type="text" name="fProducto" class="form-control form-control-sm" value="<?php echo $datos['fProducto']?>">
                        </div>
                                        
                        <div class="form-group">
                            <label for="subProducto">Categoria a la que pertenece</label>
                            <select name="subProducto" id="">

                                <?php foreach ($datos['tiposCategorias'] as $tiposCategoria):
                                                    
                                    $options = $tiposCategoria->idSubCategorias;
                                ?>
                                            
                                <option><?php echo $options;?></option>

                                <?php endforeach ?>
                                                
                            </select>
                        </div>
                                        
                            <input type="submit" class="btn btn-dark" value="Actualizar producto">           
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>




<?php require_once '../app/vistas/inc/footer.php'; ?>
