<?php
// 1. Inicia la sesión (necesario para poder destruirla)
session_start();

// 2. Destruye la sesión
// Elimina todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la sesión completamente, también se debe
// borrar la cookie de sesión.
// Nota: ¡Esto destruirá la sesión y no solo los datos de sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();

// 3. Redirecciona al index.php
header("Location: /index.php");
exit(); // Es importante usar exit() después de header()
?>