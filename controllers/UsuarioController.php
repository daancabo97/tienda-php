<?php
require_once 'models/usuario.php';

class usuarioController
{

    public function index()
    {
        echo "Controlador Usuarios, Accion index";
    }

    public function registro()
    {
        require_once 'views/usuario/registro.php';
    }


    # Funcion Guardar Usuario 
    public function save()
    {
        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            $validar = Utils::validate($nombre, $apellidos, $email, $password);

            if ($validar == false) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();


                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = $validar;
            }
        } else {
            $_SESSION['register'] = "<strong class='alerta-error'>Ha habido un error</strong>";
        }

        header("Location:".base_url.'usuario/registro');
        ob_end_flush();
    }


    # Funcion inicio de sesion segun el rol  
    public function login()
    {
        if (isset($_POST)) {
            /* Identificar al usuario */
            /* Consulta a la base de datos */
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();

            if ($identity  && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }
            } else {
                $_SESSION['error_login'] = "<strong class='alerta-error'>Identificacion desconocida !!'</strong>";
            }
        }
        header("Location:" . base_url);
        ob_end_flush();
    }


    # Funcion Cerrar Sesion
    public function logout()
    {
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        header("Location:".base_url);
    }
}
