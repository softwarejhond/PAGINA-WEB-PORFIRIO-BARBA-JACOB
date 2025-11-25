<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Favicon -->
    <link href="/img/logo_ico.ico" rel="icon" type="image/x-icon">
    <!-- <link href="img/logo.png" rel="icon"> -->

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

        /* Estilo base para ambos botones */
        .login-card .btn-base {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 5px; /* Pequeño espacio entre los botones */
        }

        /* Estilo para el botón de Ingresar (Ingresar) */
        .login-card .btn-ingresar {
            background-color: #007bff; /* Color primario de Bootstrap */
            margin-bottom: 15px; /* Espacio después de Ingresar */
        }

        .login-card .btn-ingresar:hover {
            background-color: #0056b3;
        }

        /* Estilo para el botón de Volver */
        .login-card .btn-volver {
            background-color: #007bff; /* Color secundario, para diferenciar visualmente pero manteniendo el tamaño y forma */
            text-decoration: none; /* Quita el subrayado si fuera un <a> */
            display: inline-block; /* Asegura que se comporte como un bloque para ocupar el 100% del ancho */
            line-height: normal; /* Asegura que el texto se centre verticalmente */
            text-align: center;
        }

        .login-card .btn-volver:hover {
            background-color: #0056b3;
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

<div class="login-card">
    <a href="../../index.php" style="display:block; text-align:center; margin-bottom:10px;">
        <img src="../../img/logo.png" alt="Logo" style="width:90px; display:block; margin-left:auto; margin-right:auto;">
    </a> 
    <h4>Acceso Administrador</h4>

    <form action="admin_login_process.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        
        <!-- Botón de Ingresar - Ahora usa la clase para estilo -->
        <button type="submit" class="btn-base btn-ingresar">Ingresar</button>

        <!-- Botón de Volver - Usa la clase base y la clase de volver para estilo -->
        <!-- Se mantiene como type="button" para no intentar enviar el formulario -->
        <button type="button" class="btn-base btn-volver" onclick="window.location.href='../../index.php'">
            Volver
        </button>
    </form>
</div>


</body>

<?php include('footer.php'); ?>

</html>

