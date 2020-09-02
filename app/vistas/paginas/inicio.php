<?php require_once '../app/vistas/inc/header.php'; ?>

<div style="height: 30rem;" class="container-fluid upfront mb-2">
    <div class="container row">

        <div class="col-2 mt-5 text-light container-xl">
            <h1 style="font-family: 'Lato';">Saludos</h1>
            <p style="font-family: 'Lexend Peta', sans-serif;" class="text-light">
                Somos su tienda de confianza
            </p>
        </div>

        <div style="height: 26rem;" class="col-7 mt-3 container-xl">
            <div style="border: 0.1rem solid white;" id="carouselFront" class="carousel slide mt-2" data-ride="carousel">
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
        
        <div style="border-radius: 0.5%; align-items: center;" class="col-3 mt-4 ml-0 mb-5 container bg-light">
           <div class="row">
                <div style="font-family: 'Lato';" class="col-12 container mb-2 mt-2 bold">
                    <h6 class="h4">Categorias</h6>
                </div>
                <div class="col-12 mb-2">
                    <h6>Equipo</h6>
                    <a href="">
                        <img width="" height="" src="img/keyboardMK1.jpg" alt="">
                    </a>
                </div>
                <div class="col-12 mb-2">
                    <h6>Juegos</h6>
                    <a href="">
                        <img width="" height="" src="img/ffxv.jpg" alt="">
                    </a>
                </div>
           </div>
        </div>

        <div class="container col-1">
            
        </div>
    </div>
</div>

<div class="container-sm">
    <h1 style="font-family: 'Nunito', sans-serif;" class="display-2">Rebajas</h1>
</div>

<div class="container-md mt-4">
    <div class="row">
        <div class="col-4">
            <a href="">
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
        </div>
        
    </div>
</div>
<br>


<?php require_once '../app/vistas/inc/footer.php'; ?>

