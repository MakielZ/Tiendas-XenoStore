<?php

    require_once '../app/config/configurar.php';

    require_once 'helpers/url_helpers.php';

    spl_autoload_register(function($nombreClase){
        require_once '../app/librerias/' . $nombreClase . '.php';

    });
    



?>