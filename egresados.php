<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'controllers/head.php' ?>

    <style>
    .btn-primary:hover {
        background-color: #0d6efd !important; /* Color azul de Bootstrap */
        border-color: #0d6efd !important;
    }
    </style>
</head>

<body>
    <?php include 'controllers/nav.php' ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Egresados</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Bienvenidos</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container"> 
        <div class="row justify-content-center"> 
            <div class="col-lg-8 col-md-10 col-sm-12"> 
                <div class="text-center">
                    <img src="img/competencias.png" alt="competencias" class="img-fluid w-75"> 
                </div>
                <br>
                <br>
                <div class="about-text">
                    <h3 class="text-center">Te invitamos a certificar tus competencias laborales en el SENA.</h3>
                    <p style="text-align: justify; color: black; font-size: 16px;">
                        <br>
                        <b style="text-align: center;color:#001C9B;font-size: 21px;">¿Qué es Evaluación y Certificación de Competencias Laborales?"</b>
                        <br><br>
                        La Evaluación y Certificación de Competencias Laborales es un proceso gratuito que el SENA ofrece para reconocer las capacidades de las personas en términos de conocimientos, destrezas y habilidades (aprendizajes previos) propios de un oficio u ocupación, sin importar donde, cuando y como las hayan obtenido, con el fin de facilitar la vinculación laboral y empleabilidad. Este proceso es diferente a la formación profesional que ofrece el SENA.
                        <br><br>Es un proceso voluntario y concertado entre la Entidad pública evaluadora y certificadora de competencias (SENA) y el candidato, en el que se debe demostrar el desempeño en la función laboral que realiza, teniendo como referente las Normas Sectoriales de Competencia Laboral.
                        <br><br>Si está interesado en participar de este servicio, es necesario revisar la función laboral (Norma Sectorial de Competencia Laboral) objeto de evaluación y certificación, en concordancia con la ocupación u oficio que se desempeña.
                        <br><br>
                        <div class="container mt-5">
                            <div class="row justify-content-center g-3">

                                <!-- Botón 1 -->
                                <div class="col-lg-4 col-md-5 col-sm-6 text-center">
                                    <a href="https://www.sena.edu.co/es-co/Empresarios/Paginas/certifiqueConocimientos.aspx" 
                                    class="btn py-2 px-4 w-100"
                                    target="_blank"
                                    style="font-size:16px; background-color:#001C9B; border-color:#001C9B; color:white; border-radius:8px;">
                                        Certificar Conocimientos – SENA
                                    </a>
                                </div>

                                <!-- Botón 2 -->
                                <div class="col-lg-4 col-md-5 col-sm-6 text-center">
                                    <a href="controllers/encuesta_egresados/index.php" 
                                    class="btn py-2 px-4 w-100"
                                    style="font-size:16px; background-color:#001C9B; border-color:#001C9B; color:white; border-radius:8px;">
                                        <i class="bi bi-file-earmark-text-fill"></i> Encuesta actualización <br> de información del Egresado
                                    </a>
                                </div>

                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    
</div>

</div>

    <!-- Team Start -->
    <?php 
    //include 'controllers/teachers.php';
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>