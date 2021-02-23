<?php 
session_start();
require_once '../app/vistas/inc/headerCliente.php';

?>

<div class=" row mt-4 container-xl">

    <?php
    
        $db = new bibliotecaM;

        $consulta = $db->cantidadProductos();

        $cantidad = count($consulta);
    
    
    ?>
    
        <?php if($cantidad>0){ ?>
            <div class="col-sm-10 bg-light container">
                <div class="row row-cols-4 mt-3">
                    <?php 
                        for($i = 0; $i < $cantidad; $i++){  
                        $item = $consulta[$i];     
                    ?>      <div class="col-2-sm mb-2">
                            <?php 
                                $item = $consulta[$i]
                            ?>    
                                <div class="card">
                                    <div class="card-header">
                                        <span class="text-center lead"> <?php echo $item->nombreProducto ?></span>
                                    </div>
                                        <div class="card-body">

                                        <?php
                                                $foto = 'uploads/' . $item->foto;

                                                if(file_exists($foto)){ 
                                        ?>
                                                <img class="img-fluid img-thumbnail img-responsive" src="<?php print $foto?>">
                                        <?php }else{ ?>
                                                    <div class="">Sin imagéns</div>
                                        <?php }?>

                                                <p class="mt-2 text-center"><?php echo $item->descripcionProducto ?></p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="card text-center">
                                                                <div class="card-header">
                                                                    <span>Precio</span>
                                                                </div>
                                                                <div class="card-body border">
                                                                    
                                                                    <span> $ </span>
                                                                    <span> <?php echo $item->precio ?> </span>
                                                                    <?php 
                                                                    $idItem = $item->idItemPedido;
                                                                    $nombreItem = $item->nombreProducto;
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    ?> 
                                                                    
                                                                    

                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    
                                                </div>
                                 
                                        </div>
                                    <button class="btn-login btn-login-header  mt-1">
                                            <a style="text-decoration: none;" class="text-light" href="<?php RUTA_URL?>bibliotecaC/comprar/<?php echo $idItem ?>">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-dash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                    <path fill-rule="evenodd" d="M6 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                                Comprar
                                            </a>  
                                    </button>
                                
                                
                                      
                            </div>                       
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }else{ ?>
            <div class="col-sm-10 bg-light container ">
                <div class="row row-cols-12 mt-3 d-flex justify-content-center">
                    <span class="lead">No hay productos en existencia</span> 

                </div>
            </div>
        <?php } ?>


    <div class="col-1 mt-3">
        
    </div>
</div>



<?php require_once '../app/vistas/inc/footer.php'; ?>
