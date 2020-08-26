<?php

    require_once '../app/config/configurar.php';

    spl_autoload_register(function($nombreClase){
        require_once '../app/librerias/' . $nombreClase . '.php';

    });
    



?>