<?php 

    if(isset($_POST['submit'])){


        $usuario = $_POST['user'];
        $contraseña = $_POST['pass'];
        $e1 = false;
        $e2 = false;
        $nombreUsuario;
   
        $conexion = mysqli_connect("localhost", "root", "", "mydb");
        $consulta = "SELECT * FROM usuario where correoUsuario='$usuario' and contaseñaUsuario='$contraseña'";   
        $resultado = mysqli_query($conexion,$consulta);
        
        $filas = mysqli_fetch_array($resultado);

        if(isset($filas['idRoles'])){
            if($filas['idRoles']==1){
                    
                $_SESSION['username'] = $usuario;
                header("Location: " .RUTA_URL."administradorC");

            }else if ($filas['idRoles']>=2){
                
                $_SESSION['username'] = $usuario;
                header("Location: " .RUTA_URL."usuarioC");

            }else if($fila['idRoles']==null) {
                echo 'La cuenta no existe en la base de datos';
            }
        }
        
       
        

        switch ($usuario){
            case "":
                echo '<div> Campo vacio </div>';
                
            break;

            case (comprobacionEmail($usuario)==false):
                echo '<div> Formato de e-mail incorrecto </div>';
            break;

            default: $e1 = true;
        }
        switch ($contraseña){
                    
            case (strlen($contraseña)<6)||(strlen($contraseña)==0):
                echo '<div> La contraseña no puede contener menos de 6 caracteres </div>';
            break;

            case strlen($contraseña)>12:
                echo '<div> La contraseña no puede ser mayor de 12 caracteres </div>';
            break;

            default: $e2=true;               
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion); 
    }

        function comprobacionEmail($correo){
            return (false !== filter_var($correo, FILTER_VALIDATE_EMAIL));
        }

    
?>
