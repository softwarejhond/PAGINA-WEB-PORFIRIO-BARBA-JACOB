<!-- Footer Start -->
 <style>
    @font-face {
    font-family: 'Sparose';
    /* *** RUTA CORREGIDA ***
    Debe apuntar a: /css/fonts/fonnts.com-Sparose.ttf
    */
    src: url('/css/fonts/fonnts.com-Sparose.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap; 
}

    .eagle-link-footer {
        font-family: 'Sparose', sans-serif !important;
        font-size: 14px;
        color: #fff !important;
        text-decoration: none !important;
        font-weight: normal;
    }

 </style>
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 justify-content-evenly">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Links</h4>
                <a class="btn btn-link" href="about.php">Nosotros</a>
                <a class="btn btn-link" href="contact.php">Contacto</a>
                <!-- <a class="btn btn-link" href="">Políticas de Privacidad</a> -->
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contacto</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Calle 49 N 45 – 26. Medellin - Antioquia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+57 3145282535</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>ieetdhporfiriobarbajacob@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <h4 class="text-white">Certiﬁcación CELAC</h4>
                <img src="img/logos-celac.png" alt="logo celac" style="padding: 5px; width: 200px;"> 
            </div>
            <div class="col-lg-3 col-md-6 d-flex pt-2 justify-content-end">
                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/ipbarbajacob" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://wa.link/4s1yqp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ietdh_porfirio_barba_jacob" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>
        <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="footer-bottom text-center">
                    <p class="mb-0">
                        Made By 
                        <a href="https://agenciaeaglesoftware.com/" target="_blank">
                            <span class="eagle-link-footer">Eagle Software</span>
                        </a>
                        &copy; Copyright <?php echo date("Y"); ?> for 
                        <b class="text-white">Instituto Porfirio Barba Jacob</b> 
                    </p>
                </div> 
            </div>
        </div>
</div>

</div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->

<!-- Primera región -->
<!-- <div class="hvr-region region-1">
    <i class="fas fa-share-alt main-icon"></i>
    <a href="https://www.facebook.com/ipbarbajacob" target="_blank" class="btn btn1">
        <i class="fab fa-facebook-f" aria-hidden="true"></i>
    </a>
    <a href="https://wa.link/4s1yqp" target="_blank" class="btn btn2">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
    <a href="https://www.instagram.com/ietdh_porfirio_barba_jacob" target="_blank" class="btn btn3">
        <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
</div> -->

<!-- Herramienta de Accesibilidad -->
<?php 
$tools_path = (file_exists('tools.php')) ? 'tools.php' : 'controllers/tools.php';
if (file_exists($tools_path)) {
    include $tools_path;
} else if (file_exists('../tools.php')) {
    include '../tools.php';
}
?>


