<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$user = "root";
$pass = "";
$bd = "porfirio_web_site";  

$conn = new mysqli($host, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
