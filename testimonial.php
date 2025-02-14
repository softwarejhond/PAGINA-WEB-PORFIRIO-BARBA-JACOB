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
                    <h1 class="display-3 text-white animated slideInDown">Testimonios</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonios</h6>
                <h1 class="mb-5">Nuestros Estudiantes Dicen!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores quasi nam explicabo quod iusto quae tenetur voluptatibus nemo deserunt?</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci vitae doloremque molestiae, odit quos consequuntur? Consequatur numquam dolore deserunt ratione reprehenderit debitis.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere quia atque impedit sed cumque rem fuga reprehenderit labore.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nombre del Estudiante</h5>
                    <p>Profesión</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, debitis eligendi voluptatibus aut fugit saepe molestiae sit laborum voluptate tempore eveniet natus inventore officia repellat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <?php 
    include 'controllers/footer.php'; 
    include 'controllers/scripts.php';
    ?>
</body>

</html>