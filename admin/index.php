<?php
session_start();
if (!isset($_SESSION['admin_logged'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<head>
    <!-- Favicon -->
    <link href="/img/logo_ico.ico" rel="icon" type="image/x-icon">
    <!-- <link href="img/logo.png" rel="icon"> -->
</head>


<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div class="content">
    <h2>Bienvenido al Panel Administrativo del Instituto Porfirio Barba Jacob</h2>
    <p>Selecciona una opción del menú lateral para empezar.</p>
</div>

<section>
    <footer>
<?php include "footer.php"; ?>
    </footer>

</section>

<style>
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

