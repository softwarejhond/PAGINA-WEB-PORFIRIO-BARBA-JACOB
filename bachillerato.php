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
                    <h1 class="display-3 text-white animated slideInDown">Conocimientos Académicos en Preparación para la Validación del Bachillerato</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Inicio</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="row wow fadeInUp mx-auto" data-wow-delay="0.1s">
                    <div class="col-md-5">
                        <img class="img-fluid" src="img/bachillerato.jpg" alt="">
                    </div>
                    <div class="accordion col-md-7" id="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Perfil de egreso
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Una vez terminado el programa, el estudiante habrá adquirido las competencias generales y específicas para presentarse a la PRUEBA ÚNICA DE VALIDACIÓN ante el ICFES, para lo cual se capacitan en cuanto a las consultas que se pueden hacer en la página oficial del ICFES www.icfesinteractivo.gov.com.</p>
                                    <ul class="col-lg-12 footer bullets-programs">
                                        <li class="btn btn-link">Trabajo en equipo y colaboración.</li>
                                        <li class="btn btn-link">Adaptabilidad y resolución de problemas.</li>
                                        <li class="btn btn-link">Gestión emocional y autocontrol.</li>
                                        <li class="btn btn-link">Elige y lleva a la práctica la solución o estrategia adecuada para resolver una situación determinada.</li>
                                        <li class="btn btn-link">Identifica problemas en una situación dada, analiza formas para superarlas e implementa la alternativa más adecuada.</li>
                                        <li class="btn btn-link">Identifica las necesidades de cambio de una situación dada y establece nuevas rutas de acción que conduzcan a la solución de un problema.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Plan de estudio
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>El plan de estudios está estructurado por las competencias en las áreas evaluadas por el EXAMEN SABER VALIDACIÓN DEL BACHILLERATO ante el ICFES, preparando a los estudiantes, a su vez, para impulsar procesos de autogestión, de participación y de formación democrática.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Duración
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>El programa de CONOCIMIENTOS ACADÉMICOS EN PREPARACIÓN PARA LA VALIDACIÓN DEL BACHILLERATO, cuenta con un total de 400 horas, de las cuales 300 horas, el 80% son teóricas y 100 horas, el 20% son prácticas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Módulos
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul class="col-lg-12 footer bullets-programs">
                                        <li class="btn btn-link">Ciencias Naturales.</li>
                                        <li class="btn btn-link">Ciencias Sociales y Ciudadanas.</li>
                                        <li class="btn btn-link">Matemáticas.</li>
                                        <li class="btn btn-link">Lectura Crítica.</li>
                                        <li class="btn btn-link">Inglés.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Testimonial Start -->
    <?php
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>
</body>

</html>