<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'controllers/head.php' ?>
</head>

<body>
    <?php include 'controllers/nav.php' ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Acerca de Nosotros</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Nosotros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <?php include 'controllers/services.php' ?>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/bienvenido.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">¡Bienvenido!</h1>
                    <p class="mb-4">El CENTRO DE EDUCACIÓN NO FORMAL
                        PORFIRIO BARBA JACOB, es responsable con el
                        compromiso en la formación para el Trabajo y
                        Desarrollo Humano, acatando las normas y
                        políticas públicas, implementa procesos de calidad
                        que beneficien a toda la comunidad educativa de
                        manera permanente, implementando y
                        actualizando los procesos propios de nuestra
                        actividad para todas las personas del Distrito de
                        Medellín.</p>
                </div>
            </div>
            <div class="row g-5 mb-5 flex-row-reverse">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/mision.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Misión</h1>
                    <p class="mb-4">El CENTRO DE EDUCACIÓN NO FORMAL PORFIRIO BARBA JACOB,
                        formará integralmente a los estudiantes mediante una educación que
                        combine la calidad académica con la formación técnica laboral y en
                        conocimientos académicos, promoviendo el desarrollo de
                        competencias laborales, tecnológicas y valores éticos que
                        fortalezcan el ser. Buscamos satisfacer las más exigentes
                        necesidades de nuestra comunidad en diversas áreas de
                        la educación, formando ciudadanos competentes, innovadores y
                        capaces de enfrentar los retos del mundo laboral actual.</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/vision.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Visión</h1>
                    <p class="mb-4">El CENTRO DE EDUCACIÓN NO FORMAL PORFIRIO BARBA JACOB,
                        será reconocida, para el año 2029, en el Distrito de Ciencia,
                        Tecnología e Innovación, Medellín, como líder en la formación de
                        ciudadanos competentes en el conocimiento y aplicación de los
                        saberes académicos y técnicos laborales, quienes serán gestores y
                        protagonistas de sus proyectos de vida e iniciativas personales de
                        manera consciente, responsable y comprometida, contribuyendo al
                        crecimiento integral propio y de su comunidad.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <?php 
    include 'controllers/teachers.php';
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>
</body>

</html>