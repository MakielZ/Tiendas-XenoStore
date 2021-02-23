<?php
   session_start();
   require_once RUTA_APP . '/vistas/inc/headerCliente.php'; 
?>



<div class="row">
        <div class="col-4">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="http://localhost/xenoStore/bibliotecaC">
                    Volver
                </a>   
            </div>
        </div>
</div>

<div class="row mt-4">
    <div class="card">
        <div class="card-body">
            <form action="<?php RUTA_URL?>carritoC/finalizarCompra" method="POST">
                <?php foreach ($datos['productosComprados'] as $i):?>
                                                        
                                                        
                <?php endforeach ?>                                         
                
                <div class="row ml-4">
                    <label class="lead" for="idItemCompra">ID del producto</label>
                    <div class="col-sm-12 container-fluid ml-5 mb-4">
                        <input type="text" name="idItemCompra" value=<?php echo $i->idItemPedido ?>>
                    </div>

                    <label class="lead" for="nombreItemCompra">Nombre del producto</label>
                    <div class="col-sm-12 container-fluid ml-5 mb-4">
                        <input type="text" name="nombreItemCompra" value=<?php echo $i->nombreProducto?>>
                    </div>

                    <label class="lead" for="precioItemCompra">Precio</label>
                    <div class="col-sm-12 container-fluid ml-5 mb-4">
                        <input type="text" name="precioItemCompra" value=<?php echo $i->precio ?>>
                    </div>

                    <label class="lead" for="stockCompra">Cantidad disponible</label>
                    <div class="col-sm-12 container-fluid ml-5 mb-4">
                        <input type="text" name="stockCompra" value=<?php echo $i->stock?>>
                    </div>

                    <label class="lead" for="">Cantidad a comprar</label>
                    <div class="col-sm-12 container-fluid ml-5 mb-4">
                        <input type="text" name="cantidadCompra" value="">
                    </div>

                    <input class="btn-login btn-login-header text-light mt-1" type="submit" name="" id="" value="Comprar">
                    
                </div>


                </div>
                
                <?php $db = new carritoM;

                
                
                
                
                
                
                
                
                
                ?>
            
            
            </form>
        </div>
    </div>
    <div class="col-sm-7">
        
    
    </div>

</div>


<?php require_once '../app/vistas/inc/footer.php'; ?>
