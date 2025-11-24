<?php
session_start();
if (!isset($_SESSION['admin_logged'])) {
    header("Location: admin_login.php");
    exit();
}
?>


<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div class="content">
    <h2>Bienvenido al Panel Administrativo del Intituto Porfirio Barba Jacob</h2>
    <p>Selecciona una opción del menú lateral para empezar.</p>
</div>


<?php include "partials/footer.php"; ?>
