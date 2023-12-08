<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Destruir la sesión actual
session_destroy();

// Redirigir a la página de inicio de sesión u otra página después de cerrar la sesión
header("Location: ../html/index.html");
exit();
?>