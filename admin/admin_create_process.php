<?php
session_start();
include('conexion.php'); // Incluye la conexión a la base de datos

// 1. Verificar si la petición es POST y si el usuario está logueado (solo admins pueden crear admins)
if ($_SERVER['REQUEST_METHOD'] !== 'POST' /* || !isset($_SESSION['usuario']) */) {
    header('Location: create_user.php');
    exit();
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// 2. Validación de campos
if (empty($username) || empty($password) || empty($confirm_password)) {
    $_SESSION['message'] = 'Todos los campos son obligatorios.';
    $_SESSION['message_type'] = 'danger';
    header('Location: create_user.php');
    exit();
}

if ($password !== $confirm_password) {
    $_SESSION['message'] = 'Las contraseñas no coinciden.';
    $_SESSION['message_type'] = 'danger';
    header('Location: create_user.php');
    exit();
}

// 3. Crear el hash seguro de la contraseña
// Usamos PASSWORD_DEFAULT que es la opción más fuerte y recomendada (actualmente bcrypt)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 4. Verificar si el usuario ya existe (opcional pero recomendado)
$sql_check = "SELECT id FROM admin_users WHERE usuario = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $username);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    $_SESSION['message'] = 'Error: El nombre de usuario ya existe.';
    $_SESSION['message_type'] = 'danger';
    $stmt_check->close();
    header('Location: create_user.php');
    exit();
}
$stmt_check->close();

// 5. Preparar la inserción
// **ADVERTENCIA:** Verifica que tu tabla de administradores sea 'admin_users'
$sql_insert = "INSERT INTO admin_users (usuario, password) VALUES (?, ?)";

// 6. Usar sentencias preparadas para prevenir inyección SQL
$stmt_insert = $conn->prepare($sql_insert);

// 'ss' indica que vamos a pasar dos strings (usuario, password)
$stmt_insert->bind_param("ss", $username, $hashed_password);

if ($stmt_insert->execute()) {
    // Éxito
    $_SESSION['message'] = "Usuario '{$username}' creado exitosamente.";
    $_SESSION['message_type'] = 'success';
} else {
    // Error en la inserción
    $_SESSION['message'] = 'Error al crear el usuario: ' . $conn->error;
    $_SESSION['message_type'] = 'danger';
    error_log("Error al insertar nuevo admin: " . $conn->error);
}

// 7. Limpiar y redirigir
$stmt_insert->close();
$conn->close();
header('Location: create_user.php');
exit();
?>