<?php
   session_start();
   require_once '../app/vistas/inc/header-administrador.php'; 

   if(isset($_POST['submit'])){
       $nProducto = $_POST['nProducto'];
       $deProducto = $_POST['nProducto'];
       $afProducto = $_POST['nProducto'];
       $pProducto = $_POST['nProducto'];
       $fProducto = $_POST['nProducto'];

   }
?>
<div class="container-fluid mb-4">
    <div class="row">
        <div class="col-4">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="<?php RUTA_URL?>administradorC">
                    Volver
                </a>   
            </div>
        </div>
    
    </div>
        

    <div class="row row-cols-2 mt-5 ml-1">
        <div class="col-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <label for="busqueda">Busqueda por parametros</label>
                        <form name="busqueda" action="accionesC/opcionesBusqueda" method="post">
                            <select class="btn btn-white border-dark dropdown-toggle" name="consultaOpciones">
                                <option id="cod" value="selected">Codigo</option>
                                <option id="nom" value="">Nombre del producto</option>
                                <option id="ano" value="">Año de fabricacion</option>
                                <option id="precio" value="">Precio</option>
                                <option id="fab" value="">Fabricante</option>
                                <option id="sub" value="">SubCategorias</option>
                            </select>

                            <input id="myBtn" type="submit" name="submit" class="mb-3 border btn-login mt-3" value="Buscar">
                        </form>
                    </div>    
                </div>
            </div>
        </div>
        
        <div class="col-xl-8 overflow-auto">
            <div style="height: 30rem;" class="container-fluid overflow-auto">
                <div class="card container overflow-auto">
                    <div class="card-body overflow-auto">
                        <table class="table">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Sub categoria</th>
                                    <th>Fabricante</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                    <th></th>
                                </tr>    
                            </thead>
                            <tbody>
                                <?php foreach($datos['prod'] as $producto) :?>
                                    <tr>
                                        <td><?php echo $producto->codProducto?></td>
                                        <td><?php echo $producto->nombreProducto?></td>
                                        <td><?php echo $producto->idSubCategorias?></td>
                                        <td><?php echo $producto->fabricante?></td>
                                        <td><?php echo $producto->precio?></td> 
                                        <td>
                                            <a href="<?php RUTA_URL?>accionesC/editar/<?php echo $int = (int)$producto->codProducto; ?>">
                                                <button class="btn btn-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                </button>
                                            </a>
                                        </td>  
                                        <td>
                                            <a href="<?php RUTA_URL?>accionesC/borrar/<?php echo $int = (int)$producto->codProducto; ?>">
                                                <button class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                    </svg>
                                                </button>
                                            </a>
                                        </td> 
                                    </tr>         
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="container-lg col-5">
            <span class="btn-login btn-login-header">Agregar producto</span>
            <br>

            <div class="card card-body mt-2">

                <form action="<?php RUTA_URL;?>accionesC/agregar" id="formAgregarProducto"  method="POST" enctype="multipart/form-data">
                                    
                    <div class="form-group">
                        <label for="nProducto">Producto</label>
                        <input type="text" name="nProducto" class="form-control form-control-sm">

                    </div> 

                    <div class="form-group">
                        <label for=deProducto">Descripcion</label>
                        <textarea class="form-control" name="deProducto" rows="4"></textarea>
                    </div> 
                    
                    <div class="form-group">
                        <label for="afProducto">Año de fabricacion</label>
                        <input type="text" name="afProducto" class="form-control form-control-sm">
                    </div>  

                    <div class="form-group">
                        <label for="pProducto">Precio</label>
                        <input type="text" name="pProducto" class="form-control form-control-sm">
                    </div> 

                    <div class="form-group">
                        <label for="fProducto">Fabricante</label>
                        <input type="text" name="fProducto" class="form-control form-control-sm">
                    </div>

                    <div class="Imagen">
                        <label for="fotoProducto">Fabricante</label>
                        <input type="file" class="form-control form-control-sm" name="fotoProducto" required>
                    </div>
                

                    <div class="row  mt-4">

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group text-dark">
                                        <li class=""><i class="fas fa-laptop"></i> Computadoras: 1</li>
                                        <li class=""><i class="fas fa-headset"></i> Headsets: 2</li>
                                        <li class=""><i class="fas fa-gamepad"></i> Videojuegos: 3</li>
                                        <li class=""><i class="fab fa-playstation"></i> Consolas: 4</li>
                                        <li class=""><i class="fas fa-mobile-alt"></i> Smartphones: 5</li>
                                        <li class=""><i class="fas fa-camera"></i> Camaras: 6</li>
                                    </ul>
                                </div>            
                            </div>            
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group mt-4">
                                <label for="subProducto">Categoria a la que pertenece  </label>
                                <select name="subProducto" id="">

                                    <?php foreach ($datos['tiposCategorias'] as $i):
                                                        
                                        $options = $i->idSubCategorias;
                                        
                                        
                                    ?>
                                                
                                    <option><?php echo $options?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>
                        </div>

                        
                    </div>
                    
                                    
                        <input type="submit" name="submit" class="btn btn-danger text-light" value="Agregar producto">
                                     
                </form>
            </div>
        </div>

        <div class="col-7">
            <div class="container-fluid mt-2 justify-content-end"> 
                    <a style="float: right; background: #343A40 ;" class="btn-login btn-login-header text-light mt-1 " href="<?php RUTA_URL?>accionesC/reporte">
                        Imprimir reporte
                    </a>   
            </div>                          
        </div>

    </div>
</div>

<br>

<?php require_once '../app/vistas/inc/footer.php'; ?>
