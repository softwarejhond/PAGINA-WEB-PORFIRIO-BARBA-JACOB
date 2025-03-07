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
                    <h1 class="display-3 text-white animated slideInDown">Pqrs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Páginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pqrs</li>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Pqrs</h6>
                <h1 class="mb-4">Solicita tu Pqrs</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="form">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="radicadoPqrs">Radicado Pqrs</label>
                                <input class="form-control" type="text" name="radicadoPqrs" id="radicadoPqrs" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="tipoSolicitud">Tipo de Solicitud</label>
                                <select class="form-control" name="tipoSolicitud" id="tipoSolicitud">
                                    <option value="">Seleccionar</option>
                                    <option value="Preguntas">Preguntas</option>
                                    <option value="Felicitaciones">Felicitaciones</option>
                                    <option value="Solicitud">Solicitud</option>
                                    <option value="Reclamos">Reclamos</option>
                                    <option value="Quejas">Quejas</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="fullName">Nombre Completo</label>
                                <input class="form-control" type="text" name="fullName" id="fullName" required />
                            </div>
                            <div class="col-md-6">
                                <label for="tipoIdentificacion">Tipo de Identificación</label>
                                <select class="form-control" name="tipoIdentificacion" id="tipoIdentificacion" required>
                                    <option value="">Seleccionar</option>
                                    <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                    <option value="RUT">RUT</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Licencia de Conducir">Licencia de Conducir</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="numeroIdentificacion">Número de Identificación</label>
                                <input class="form-control" type="text" name="numeroIdentificacion" id="numeroIdentificacion" required />
                            </div>
                            <div class="col-md-6">
                                <label for="medioRespuesta">¿Donde Quieres Recibir la Respuesta?</label>
                                <select class="form-control" name="medioRespuesta" id="medioRespuesta">
                                    <option value="">Seleccionar</option>
                                    <option value="Correo Electrónico">Correo Electrónico</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="Teléfono">Teléfono</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="email">Correo Electrónico</label>
                                <input class="form-control" type="email" name="email" id="email" required />
                            </div>
                            <div class="col-md-6">
                                <label for="telefono">Número de Teléfono</label>
                                <input class="form-control" type="tel" name="telefono" id="telefono" required />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="mensaje">
                                <label for="">Descripcion de la Solicitud</label>
                                <textarea class="form-control" type="text" class="message-box" placeholder="Mensaje" name="menssage" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php
    include 'controllers/footer.php';
    include 'controllers/scripts.php';
    ?>
    <script>
    function generarInputAlfanumerico() { 
      const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
      let resultado = ''; // Generar la cadena alfanumérica de 8 dígitos 
      for (let i = 0; i < 8; i++) { 
        const indiceAleatorio = Math.floor(Math.random() * caracteres.length); 
        resultado += caracteres.charAt(indiceAleatorio); 
      } 
      return resultado; 
    }
    document.querySelector('#radicadoPqrs').value = generarInputAlfanumerico();
  </script>
</body>

</html>