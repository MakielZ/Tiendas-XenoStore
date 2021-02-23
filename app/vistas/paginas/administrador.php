<?php 
session_start();

require_once '../app/vistas/inc/header-administrador.php'; 
?>
    <div class="row mb-5">
        <div class="container-sm col-3">
            <div class="container-sm">
                <div class="card ml-4 mt-5">
                    <div class="card-body panel-admin">
                        <ul>
                            <li> <a href=""> <i class="fas fa-cart-plus mr-3"></i>Ultimas compras</a> </li>
                            <li> <a href="<?php RUTA_URL?>accionesC"> <i class="fas fa-edit mr-3"></i> Operaciones</a></li>
                            <li> <a href=""> <i class="fas fa-times mr-3"></i>Consultar usuarios</a> </li>
                            <li> <a href="<?php RUTA_URL?>stockC"><i class="fab fa-sistrix mr-3"></i> Actualizar stock</a> </li>
                            <li> <a href=""> <i class="fas fa-circle-notch mr-3"></i> Ajustes de diseño</a> </li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
        
        <div class="container-fluid col-sm-8">
            <div class="jumbotron container-sm">
                <h1 style="font-family: 'Lato';"class="display-5"> Bienvenido de nuevo, administrador</h1>
            </div>
                <h5 class="mt-2 ml-3">Ultimas compras realizadas</h5>
                <table class="mt-3 table table-light mb-3">
                    <thead class="bg-dark text-light">
                        <tr>
                        <th scope="col text-dark">#</th>
                        <th scope="col text-dark">Fecha de compra</th>
                        <th scope="col text-dark">Categoria</th>
                        <th scope="col text-dark">Producto</th>
                        <th scope="col text-dark">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>24/05/2020</td>
                        <td>Videojuego</td>
                        <td>Fifa 21</td>
                        <td>40$</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>13/01/2019</td>
                        <td>Consola</td>
                        <td>Playstation 4</td>
                        <td>300$</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>20/10/2018</td>
                        <td>Telefonia</td>
                        <td>Hwawei Y8</td>
                        <td>75$</td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="container-fluid col-sm-9">
            <div class="container-sm">
            <div style="float: right;">
                    <p>
                        <a href="" class="btn">Imprimir</a>
                    </p>
                </div>
            <div class="row row-cols-2  ml-5">
                <div class="option-btn col-sm-2 mr-3">
                    <p>
                        <a href="<?php RUTA_URL?>agregarC" class="btn">Configuración</a>
                    </p>
                </div>
                <div class="option-btn col-sm-2 ml-5">
                    <p>
                        <a href="<?php RUTA_URL?>accionesC" class="btn btn-red">Usuarios</a>
                    </p>
                </div>  
            </div>
        </div>

    </div>
        
<?php require_once '../app/vistas/inc/footer.php'; ?>
