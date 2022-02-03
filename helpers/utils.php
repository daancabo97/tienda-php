<?php
 
class Utils{

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
           $_SESSION[$name] = null;
           unset($_SESSION[$name]);
        }

        return $name;
    }


/*===============================
   Validacion campos de registro 
 ================================*/

 
            public static function validate($nombre, $apellidos, $email, $password){
                $error = true;
        
                # Validar nombre
                if(empty($nombre)){
                    $error = "<strong class='alerta-error'>Por favor introduzca su Nombre</strong>";
                    return $error;
                }elseif(is_numeric($nombre) && preg_match("/[0-9]/", $nombre)){
                    $error = "<strong class='alerta-error'>Por favor introduzca un Nombre válido</strong>";
                    return $error;
                }else{
                    $error = false; 
                }
        
                # Validar apellido
                if(empty($apellidos)){
                    $error = "Por favor introduzca su <strong>Email</strong>";
                    return $error;
                }elseif(is_numeric($apellidos) && preg_match("/[0-9]/", $apellidos)){
                    $error = "<strong class='alerta-error'>Por favor introduzca un Apellido válido</strong>";
                    return $error;
                }else{
                    $error = false; 
                }
        
                # Validar email
                $sql = "SELECT email FROM usuarios WHERE email = '$email' ";
                $conexion = Database::connect();
                $result = mysqli_fetch_assoc($conexion->query($sql)); //   ->    Validar que no sea un usuario ya registrado con el mismo email


                        $correo = "hola@hotmail.com";      //    ->   Validar el formato del tipo de correo electronico
                        $explode = explode("@", $correo);
                    
                        if ($explode[1] == "hotmail.com") {
                            echo "Valido";
                        } else {
                            echo "No valido";
                        }
                

                if(substr_count($email, "@") != 1){
                    $error = "<strong class='alerta-error'>El correo no es válido, falta el signo '@'</strong>";
                    return $error;
                }elseif ($explode[1] =! "hotmail.com" OR $explode[1] =! "gmail.com" OR $explode[1] =! "yahoo.com" OR $explode[1] =! "outlook.com") {
                    $error = "<strong class='alerta-error'>El email registrado no pertenece a ningun formato de correo </strong>";
                    return $error;
                }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error = "<strong class='alerta-error'>Por favor introduzca un Email válido</strong>";
                    return $error;
                }elseif(!empty($result)){
                    $error = "<strong class='alerta-error'>El email ya está registrado</strong>";
                    return $error;
                }else{
                    $error = false; 
                }

                # Validar contraseña
                if(empty($password)){
                    $error = "<strong class='alerta-error'>Por favor introduzca su Contraseña</strong>";
                    return $error;
                }elseif(strlen($password) <= 8  &&  preg_match_all('$S*(?=S{8,})S*$', $password) == true){
                    $error = "<strong class='alerta-error'>Introduzca una contraseña de minimo 8 caracteres y contenga simbolos </strong>";
                    return $error;
                }else{
                    $error = false; 
                }
        
                # Devolver el $error
                return $error;
            }

/*===============================
  fin Validacion campos de registro 
 ================================*/

}
