<?php
session_start();
require_once '../app/vistas/inc/headerCliente.php'; 


?>

<div class="container upfront mb-2">
    <div class="container-xl row upfront-image border-right border-bottom border">
        <div style="height: 23rem;" class="col-7 mt-5 container-sm">
            <div id="carouselFront" class="carousel slide mt-2 border shadow-lg" data-ride="carousel">
                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/fifa21.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/sekiro.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ds3.jpg" alt="">
                            </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFront" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFront" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
        
        <div id="generalPanel" class="col-xl-4 container mt-5 categoriesElements generalPanel border row shadow-lg">
           <div class="col-sm-6 border-right">
               <div class="categoriesElements mt-2">
                    <h6>Gaming</h6>
                    <a href="">
                        <img src="img/keyboardMK1.jpg" alt="">
                    </a>
                    <div class="container">
                        <ul class="categoriesList"> 
                            <li><a href="">Computadoras</a></li>
                            <li><a href="">Headsets</a></li>
                            <li><a href="">Teclados</a></li>
                        </ul>
                    </div> 
                 </div>
           </div>
           <div class="col-sm-6">
               <div class="categoriesElements mt-2">
                    <h6>Electronicos</h6>
                    <a href="">
                    <img src="img/mouseAntryx.jpg" alt="">
                    </a>
                    <div class="container">
                        <ul class="categoriesList"> 
                            <li><a href="">Computadoras</a></li>
                            <li><a href="">Smartphones</a></li>
                            <li><a href="">Camaras</a></li>
                        </ul>
                    </div>
                </div>  
           </div>
        </div>
        <div class="col-1">
        </div>
    </div>

    
</div>

<div class="container mt-2">
    <span id="welcomeText" class="h2">Lo mismo de siempre, pero más barato</span>
</div>

<br>

<div class="container-md mt-4">
    <div class="row">
        <div class="col-4">
            <a href="<?php RUTA_URL?>inicioC/hola">
                <img class="blackBorder" style="width: 20rem; height: 11.75rem;"src="img/fallguys.jpg" alt="">
            </a>
        </div>
        <div class="col-4" >
            <a href="">
                <img class="blackBorder" style="width: 20rem; height: 11.75rem;"src="img/dmcv.png" alt="">
            </a>
        </div>
        <div class="col-4" >
            <a href="">
                <img class="blackBorder" style="width: 20rem; height: 11.75rem;"src="img/op4.jpg" alt="">
            </a>
            <
    </div>
</div>

<br>




<?php require_once '../app/vistas/inc/footer.php'; ?>

