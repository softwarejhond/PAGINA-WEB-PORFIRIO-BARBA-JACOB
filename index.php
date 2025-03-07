<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'controllers/head.php' ?>
</head>

<body>
    <?php include 'controllers/nav.php' ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/matriculas.png" alt="">
                <div class="content-carousel">
                    <a href="index.php" class="logo">
                        <img src="img/logo.png" alt="">
                    </a>
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-10">
                                <h1 class="display-3 text-white animated slideInDown">¡Tu futuro comienza hoy! Matrículas Abiertas</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Las puertas a tu éxito académico ya están abiertas. Aprovecha la oportunidad de formar parte de una comunidad universitaria que impulsa tu crecimiento personal y profesional.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="content-carousel">
                    <a href="index.php" class="logo">
                        <img src="img/logo.png" alt="">
                    </a>
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-10">
                                <h1 class="display-3 text-white animated slideInDown">Metodologías Innovadoras</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Implementar programas académicos y metodologías
                                    técnico-pedagógicas que mejoren cualitativamente la educación en consonancia con las
                                    características sociales, económicas, tecnológicas y culturales del entorno nacional,
                                    regional y local.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="content-carousel">
                    <a href="index.php" class="logo">
                        <img src="img/logo.png" alt="">
                    </a>
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-10">
                                <h1 class="display-3 text-white animated slideInDown">Desarrollo Integral del Saber</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Fomentamos el desarrollo humano, cultural, económico,
                                    tecnológico y social de la región y el distrito de Medellín, reconociendo la educación
                                    como la principal fuente del saber.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <?php include 'controllers/services.php' ?>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/estudiantes.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Acerca de Nosotros</h6>
                    <h1 class="mb-4">Bienvenido al Instituto Porfirio Barba Jacob</h1>
                    <p class="mb-4">Como Institución de Educación para el Trabajo y el Desarrollo Humano.</p>
                    <p class="mb-4">El proceso formativo del estudiante es diseñado con base en el desarrollo de competencias
                        laborales que propone un paradigma en donde el proceso de enseñanza se percibe y se lleva a
                        cabo como un proceso dinámico, participativo e interactivo del sujeto, de modo que el
                        conocimiento sea una auténtica construcción operada por la persona que aprende.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <?php 
    include 'controllers/programs.php';
    include 'controllers/testimonials.php';
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>

</body>

</html>