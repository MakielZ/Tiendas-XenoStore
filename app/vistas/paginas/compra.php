<?php
   session_start();
    require_once RUTA_APP . '/vistas/inc/headerCliente.php'; 
?> 



<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="http://localhost/xenoStore/bibliotecaC">
                    Volver
                </a>   
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="container col-md-12 mt-4">


                <div class="card card-body mt-2">
                    <?php

                        $idItm = $datos['idItem'];
                     
                        $db = new bibliotecaM;
                     
                        $consulta = $db->mostrarItemPorId($idItm);
                     
                        if($consulta==true) {
                     
                            foreach($consulta as $o){
                    ?>  
                                <div class="row">
                                    <div class="col-4">
                                        <span class="lead ml-3 mb-2"><?php echo $o->nombreProducto?> </span>
                    <?php

                                        $foto = 'uploads/'.$o->foto;

                                        if(file_exists($foto)){                     
                    ?>              
                                        
                                            <div class="col-sm-12 mr-4">
                                                <img class="img-fluid img-thumbnail" src="http://localhost/xenoStore/uploads/<?php print $o->foto?>">
                                            </div>
                                        
                    <?php      
                                        } 
                    ?>
                                    </div>
                                    <div class="col-8 mt-5">
                                        <form action="http://localhost/xenoStore/bibliotecaC/agregarProductoInv" method="POST">

                                            <?php 
                                            
                                            $idProductoInventario = $o->idItemPedido;
                                            $nombreProductoInventario = $o->nombreProducto; 
                                            $precioProductoInventario = $o->precio;
                                            
                                            
                                            ?>

                                            <div class="container-fluid mb-3">
                                                <span class="lead">Precio: </span>
                                                <input readonly type="hidden" maxlength="3" name="idProductoInventario" value=<?php echo $idProductoInventario?>>
                                                <input readonly type="text" maxlength="" name="precioProductoInventario" value=<?php echo $precioProductoInventario?>>
                                                
                                            </div>

                                            <div re class="container-fluid">
                                                <input class="btn-login btn-login-header text-light mt-1" type="submit" name="" id="" value="Añadir al carrito">
                                                <a class="btn-login btn-login-header text-light mt-1" href="<?php echo RUTA_URL?>carritoC">
                                                    Ver carrito 
                                                </a> 
                                            </div>
                                        </form>     
                                    </div>
                    <?php
                    
                            }     
                    ?>
                                    
                                </div>

                    <?php

                        }
                    ?>
                    
                    
                                                    


                </div>
            </div>
        </div>
    </div>

</div>




<?php require_once '../app/vistas/inc/footer.php'; ?>
