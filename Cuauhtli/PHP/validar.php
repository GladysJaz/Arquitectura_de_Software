<?php
 
include('conexion_login.php'); #aqui es donde hace la conexión a la  base de datos
class Database {
    private $conexion;

    private function __construct() {
        $this->conexion = new mysqli("localhost", "root", "", "login");

        if ($this->conexion->connect_error) {
            die("Conexión a la base de datos fallida: " . $this->conexion->connect_error);
        }
    }



public static function obtenerConexion() {
        static $conexion = null;
        if ($conexion === null) {
            $conexion = new self();
        }
        return $conexion->conexion;
    }
}


class UsuarioAutenticacion {
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        $this->conexion = Database::obtenerConexion();
    }

    public static function obtenerInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new UsuarioAutenticacion();
        }
        return self::$instancia;
    }


 public function autenticarUsuario($usuario, $contraseña) {
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
        $resultado = $this->conexion->query($consulta);

        if ($resultado && $resultado->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}


$usuario = $_POST['usuario']; # Datos ingresados por teclado
$contraseña = $_POST['contraseña'];


// Iniciar sesión
session_start();

$autenticacion = UsuarioAutenticacion::obtenerInstancia();
if ($autenticacion->autenticarUsuario($usuario, $contraseña)) {
    $_SESSION['usuario'] = $usuario;
    header('location:../HTML/portada.html');
} else {
    include("../HTML/index.html");
    echo "<h1 class='bad'>¡ERROR EN LA AUTENTICACIÓN DEL USUARIO!</h1>";
}
?>
