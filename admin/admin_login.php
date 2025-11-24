<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <style>
        body {
            /* Mismo fondo y centrado que la ventana de éxito */
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ocupa el 100% de la altura de la vista */
            margin: 0;
        }

        .login-card {
            /* Estilo similar a 'ventana-exito' */
            background: white;
            width: 380px; /* Ancho fijo para centrarlo bien */
            padding: 30px; 
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15); /* Sombra más definida */
        }

        .login-card h4 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
        }

        .login-card input[type="text"],
        .login-card input[type="password"] {
            /* Estilo para los inputs */
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px; /* Espacio entre campos */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box; /* Asegura que el padding no cambie el ancho */
            transition: border-color 0.3s;
        }

        .login-card input[type="text"]:focus,
        .login-card input[type="password"]:focus {
            border-color: #007bff; /* Color al enfocarse */
            outline: none;
        }

        .login-card button[type="submit"] {
            /* Estilo para el botón de Ingresar */
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            background-color: #007bff; /* Color primario de Bootstrap */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-card button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="login-card">
    <a href="../../index.php" style="display:block; text-align:center; margin-bottom:10px;">
        <img src="../../img/logo.png" alt="Logo" style="width:90px; display:block; margin-left:auto; margin-right:auto;">
    </a>    <h4>Acceso Administrador</h4>

    <form action="admin_login_process.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>
