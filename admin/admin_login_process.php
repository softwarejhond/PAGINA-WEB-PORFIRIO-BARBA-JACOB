<?php
session_start();
include("../Controllers/encuesta_egresados/conexion.php");


// Validar que existan los campos
if (!isset($_POST["usuario"]) || !isset($_POST["password"])) {
    die("Faltan datos del formulario.");
}

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Consulta correcta según tu tabla
$sql = "SELECT * FROM admin_users WHERE usuario='$usuario' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["admin"] = $usuario;
    $_SESSION["admin_logged"] = true;

    header("Location: index.php"); // <-- ESTA ES LA RUTA CORRECTA
    exit();
} else {
    header("Location: admin_login.php?error=1");
}

?>


