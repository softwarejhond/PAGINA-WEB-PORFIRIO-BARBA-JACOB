<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "porfirio_web_site";; // cambia si tu BD del colegio tiene otro nombre

$conn = new mysqli($host, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
