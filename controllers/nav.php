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
    <div class="container-fluid">
        <a class="logo-nav" href="index.php">
            <img src="img/logo.png" class="m-2" width="80px" alt="logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Inicio</a>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    INSTITUCIÓN
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about.php">Nosotros</a>
                    <a class="dropdown-item" href="/DOCS/MA03 - MANUAL DE CONVIVENCIA.pdf" target="_blank"> Manual de convivencia</a>
                </div>
            </li>

                <div class="nav-item dropdown">
                    <a href="programas.php" class="nav-link dropdown-toggle 
                        <?php echo ($currentPage == 'software.php' || $currentPage == 'primera-infancia.php' || $currentPage == 'bachillerato.php') ? 'active' : ''; ?>" 
                        data-bs-toggle="dropdown">Programas</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="primera-infancia.php" class="dropdown-item">Primera Infancia</a>
                        <a href="bachillerato.php" class="dropdown-item">Validación del Bachillerato</a>
                    </div>
                </div>

                <a href="egresados.php" class="nav-item nav-link <?php echo ($currentPage == 'egresados.php') ? 'active' : ''; ?>">Egresados</a>
                <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contacto</a>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    POLÍTICAS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/DOCS/POLÍTICA_DE_CALIDAD.pdf" target="_blank">DO05-POLÍTICA DE CALIDAD </a>

                </div>
            </li>
                
                <!-- 🔥 Botón del Administrador (nuevo) -->
                <!-- <a href="admin/index.php" 
                   class="nav-item nav-link <?php echo (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) ? 'active' : ''; ?>">
                   Admin
                </a>                 -->
            </div>

            <!-- Región Q10 -->
            <div class="hvr-region region-nav me-4"> 
                <span class="main-icon">Q10</span>
                <a href="https://site2.q10.com/login?ReturnUrl=%2F&aplentId=c7359574-4ea5-481a-83d7-5bcb560189ac" 
                   target="_blank" class="btn btn2" title="Ingreso">
                    <i class="fa-solid fa-right-to-bracket"></i>
                </a>
                <a href="https://site2.q10.com/Preinscripcion?aplentId=c7359574-4ea5-481a-83d7-5bcb560189ac" 
                   target="_blank" class="btn btn3" title="Registro">
                    <i class="fa-regular fa-address-card"></i>
                </a>
            </div>
        </div>

        <button type="button" class="navbar-toggler m-2" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Navbar End -->

