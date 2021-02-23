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

<div class="container-fluid text-center">
    <img src="img/exito.jpg" alt="">
    <span class="lead"> ¡Compra realizada con exito! </span>
</div>


<?php require_once '../app/vistas/inc/footer.php'; ?>
