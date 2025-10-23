<?php $currentPage = basename($_SERVER["PHP_SELF"]) ?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>
<!-- Spinner End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <div>
        <a class="logo-nav" href="index.php">
            <img src="img/logo.png" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 mx-auto">
                <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Inicio</a>
                <a href="about.php" class="nav-item nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">Nosotros</a>
                <!-- <a href="programas.php" class="nav-item nav-link <?php echo ($currentPage == 'programas.php') ? 'active' : ''; ?>">Programas</a> -->
                <div class="nav-item dropdown">
                    <a href="programas.php" class="nav-link dropdown-toggle <?php echo ($currentPage == 'software.php' || $currentPage == 'primera-infancia.php' || $currentPage == 'bachillerato.php') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Programas</a>
                    <div class="dropdown-menu fade-down m-0">
                         <!--a href="software.php" class="dropdown-item">Codificación De Software</a>-->
                        <a href="primera-infancia.php" class="dropdown-item">Primera Infancia</a>
                        <a href="bachillerato.php" class="dropdown-item">Validación del Bachillerato</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contacto</a>
            </div>
        </div>
        <button type="button" class="navbar-toggler m-2" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Navbar End -->