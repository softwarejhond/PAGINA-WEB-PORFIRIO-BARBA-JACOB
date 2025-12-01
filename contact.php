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
                    <h1 class="display-3 text-white animated slideInDown">Contacto</h1>
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
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contacto</h6>
                <h1 class="mb-5">Contactanos para Cualquier Consulta</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Contactanos</h5>
                    <p class="mb-4">¿Tienes preguntas o quieres más información? Estamos aquí para ayudarte. Completa el formulario y descubre cómo podemos apoyarte en tu crecimiento. ¡Contáctanos ahora y da el siguiente paso!</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Dirección</h5>
                            <p class="mb-0">Calle 49 N 45 – 26. Medellin - Antioquia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Teléfono</h5>
                            <p class="mb-0">+57 3145282535</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Correo Electrónico</h5>
                            <p class="mb-0">ieetdhporfiriobarbajacob@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.124537080397!2d-75.56771922602697!3d6.247315426313297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442857c95fbf0f%3A0x4ac94f864e44f034!2sCl.%2049%20%2345-26%2C%20La%20Candelaria%2C%20Medell%C3%ADn%2C%20La%20Candelaria%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1739406666864!5m2!1ses!2sco" height="450" style="border:0; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name">
                                    <label for="name">Tu nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Tu correo</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="button">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

                    <script type="text/javascript">
                        emailjs.init('44XAK9ne_9flqccdG')
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const btn = document.getElementById('button');

        document.getElementById('form')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                btn.value = 'Enviando...';

                const serviceID = 'default_service';
                const templateID = 'template_b2vgy5g';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Enviar';
                        Swal.fire({
                            icon: 'success',
                            title: '¡Mensaje Enviado!',
                            text: 'Gracias por contactarnos. Te responderemos pronto.',
                            confirmButtonColor: '#06BBCC',
                            confirmButtonText: 'Aceptar'
                        });
                        document.getElementById('form').reset();
                    }, (err) => {
                        btn.value = 'Enviar';
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al enviar',
                            text: 'Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.',
                            confirmButtonColor: '#06BBCC',
                            confirmButtonText: 'Aceptar'
                        });
                    });
            });
    </script>
</body>

</html>