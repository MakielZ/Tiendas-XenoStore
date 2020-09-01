<?php require_once '../app/vistas/inc/header.php'; ?>

<div style="height: 30rem;" class="container-fluid upfront">
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
        <div style="border-radius: 2.5%; align-items: center;" class="col-3 mt-4 mb-5 text-light d-flex flex-column justify-content-center bg-dark ">
            <svg width="3rem" height="3rem" viewBox="0 0 16 16" class="bi bi-keyboard-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm13 .25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM2.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 8.75v-.5A.25.25 0 0 0 2.75 8h-.5zM4 8.25A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zM6.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 7 8.75v-.5A.25.25 0 0 0 6.75 8h-.5zM8 8.25A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zM13.25 8a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zm-3-2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-1.5zm.75 2.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM11.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5zM9 6.25A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75v-.5zM7.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 8 6.75v-.5A.25.25 0 0 0 7.75 6h-.5zM5 6.25A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zM2.25 6a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h1.5A.25.25 0 0 0 4 6.75v-.5A.25.25 0 0 0 3.75 6h-1.5zM2 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zM4.25 10a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-5.5z"/>
            </svg>
            <p style="font-family: 'Lato'; font-weight: bold;" class="text-light align-content-center">
                Mira nuestras ofertas
            </p>
        </div>
    </div>
</div>

<div class="container-md mt-4">
    <div class="row">
        <div class="col-4" >
            <img style="height: 300px; width: 300px;" class="rounded-circle" src="img/circle-1.jpg" alt="">
        </div>
        <div  class="col-4" >
            <img style="height: 300px; width: 300px;" class="rounded-circle" src="img/circle-2.jpg" alt="">
        </div>
        <div  class="col-4" >
            <img style="height: 300px; width: 300px;" class="rounded-circle" src="img/circle-3.jpg" alt="">
        </div>
    
    </div>
    
</div>


<?php require_once '../app/vistas/inc/footer.php'; ?>

