<?php
session_start();
// Incluye la conexión y verifica si el usuario está logueado
include('conexion.php'); 
// Aquí deberías añadir una verificación para asegurarte que solo los administradores 
// puedan acceder a esta página. Por ejemplo:
/*
if (!isset($_SESSION['usuario'])) {
    header('Location: admin_login.php');
    exit();
}
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="/img/logo_ico.ico" rel="icon" type="image/x-icon">
    <!-- El CSS base de tu login card se replicaría aquí o se usaría un CSS de administración global -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-weight: 600;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
        }
        .alert-fixed {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .footer-bottom {
            background-color: #001C9B !important;
            padding-top: 16px !important;
            padding-bottom: 32px !important;
            color: #fff;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Crear Nuevo Usuario Administrador</h2>

    <?php
    // Mostrar mensajes de estado
    if (isset($_SESSION['message'])):
        $alert_class = $_SESSION['message_type'] == 'success' ? 'alert-success' : 'alert-danger';
        echo '<div class="alert alert-fixed ' . $alert_class . '" role="alert">';
        echo $_SESSION['message'];
        echo '</div>';
        // Limpiar la sesión
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    endif;
    ?>

    <form action="admin_create_process.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        
        <!-- Aquí podrías añadir un campo para el nivel de permiso si lo necesitaras -->
        
        <button type="submit" class="btn btn-primary" style="display:block; margin: 0 auto 10px auto; width: 60%;">Crear Usuario</button>
        <a href="logout.php?redirect=admin_login.php" class="btn btn-primary mt-3" style="display:block; margin: 0 auto; width: 60%;">Iniciar sesión</a>
    </form>
</div>

<script>
    // Script para desvanecer el mensaje de alerta después de unos segundos
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.querySelector('.alert-fixed');
        if (alert) {
            setTimeout(() => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        }
    });
</script>
</body>


</html>