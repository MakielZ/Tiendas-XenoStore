<?php 

session_start();
include '../app/vistas/inc/head.php';?>

<div class="bg-login">
    <div class="container my-auto">
        <div class="card">
            <div class="card-body text-md-center">
            <svg width="5rem" height="5rem" viewBox="0 0 16 16" class="bi bi-person-square login-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <h5 class="card-title login-title">Bienvenido</h5>
            <form class="form-group borde mb-3r" method="post" >
                <div class="row">
                    <div class="col-sm-3">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="col-sm-6">
                        <input name="user" type="email" id="usuarios">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-3">
                        <label for="contraseña">Clave</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" id="contraseña" name="pass">
                    </div>
                </div>

                <br>

                <input id="myBtn" type="submit" name="submit" class="mb-3 btn-login btn-login-form text-light mt-2" value="Entrar">
                <button class="mb-3 btn-login btn-login-form text-light mt-2">Registrarse</button>

                <br>
                      
                <?php require_once '../app/controladores/validaciones.php' 
                
                
                ?>
            </form>


            </div> 
            

        </div>
       
    </div>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


