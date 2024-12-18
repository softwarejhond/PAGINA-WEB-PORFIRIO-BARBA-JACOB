		<!DOCTYPE html>
		<html lang="zxx" class="no-js">

		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="img/logotitle.png">
			<!-- Author Meta -->
			<meta name="author" content="colorlib">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- Site Title -->
			<title>IETDH PORFIRIO BARBARA JACOB</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
				CSS
				============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/main.css">
			<style>
				/* Fondo de cada slide */
				.carousel-item {
					position: relative;
					height: 780px;
					/* Ajusta la altura */
					background-size: cover;
					background-position: center;
				}

				/* Imágenes */
				.bg-image-1 {
					background-image: url('https://lh6.googleusercontent.com/proxy/A4pJOa8VKNM9gXbV8w2T0JHB0Uf3OL9qGf95Xj4hUj4ncsJQpyu37AMnhkYlRrHCv1GV48nR0A1VVm3nQHJKC_LmNgF3sS3PEjus5TitkMRMLWk-fGW3NCZ1ESovxQ');
				}

				.bg-image-2 {
					background-image: url('https://www.savethechildren.org.pe/wp-content/uploads/2022/11/slide_Mesa-de-trabajo-1-1920x860.png');
				}

				.bg-image-3 {
					background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsI5n9mPBUY-SnAc7aDKBghdxbWMj4kZdQsw&s');
				}

				/* Overlay de color azul transparente */
				.carousel-item::before {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background: rgba(4, 9, 29, 0.7);
					/* Color azul con transparencia */
					z-index: 1;
					/* Para que esté sobre la imagen */
				}

				/* Asegura que el texto esté visible y encima del overlay */
	.carousel-caption {
		position: absolute;
		top: 80%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align: center;
		z-index: 2; /* El texto debe estar sobre el overlay */
		color: #fff; /* Texto blanco para contraste */
		text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra para mejorar visibilidad */
	}

	/* Ajusta el tamaño del texto */
	.carousel-caption h1 {
		font-size: 2.5rem;
		font-weight: bold;
		margin: 0;
		color: #fff;
	}
			</style>
		</head>

		<body>
			<?php include 'controller/navbar.php' ?><!-- #navbar -->

			<!-- start banner Area -->
			<!-- Banner Carousel -->
			<section id="bannerCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicadores -->
				<ol class="carousel-indicators">
					<li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#bannerCarousel" data-slide-to="1"></li>
					<li data-target="#bannerCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Contenido del Carousel -->
				<div class="carousel-inner">
					<div class="carousel-item active bg-image-1">
						<div class="carousel-caption d-none d-md-block">
							<h1>NO ENSEÑAMOS MÁS, ENSEÑAMOS MEJOR</h1>
						</div>
					</div>
					<div class="carousel-item bg-image-2">
						<div class="carousel-caption d-none d-md-block">
							<h1>APRENDIZAJE DE CALIDAD</h1>
						</div>
					</div>
					<div class="carousel-item bg-image-3">
						<div class="carousel-caption d-none d-md-block">
							<h1>CONSTRUYENDO FUTURO</h1>
						</div>
					</div>
				</div>

				<!-- Controles -->
				<a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>Nuestros programas</h4>
								</div>
								<div class="desc-wrap">
									<p>
										TÉCNICO LABORAL EN AUXILIAR DE EDUCACIÓN PARA LA PRIMERA INFANCIA
										<br>
										<br>
										CONOCIMIENTOS ACADÉMICOS EN PREPARACIÓN PARA LA VALIDACIÓN DEL
										BACHILLERATO
									</p>
									<a href="courses.php">Ver programas</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>Matriculate ahora</h4>
								</div>
								<div class="desc-wrap">
									<p>
										MATRICULATE AHORA Y ENTRA AL MUNDO LABORAL.
										<br>
										<br>
										EL MOMENTO ES AHORA. ¡UNETE A NOSOTROS!
									</p>
									<a href="#">Vamos!</a>
									<br>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->

			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Políticas de calidad</h1>
								<p>El centro de educación no formal Porfirio Barba Jacob, como institución de educación para el trabajo y el desarrollo humano, se compromete con sus clientes y partes interesadas a:</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/p1.jpg" alt="">
									</div>
								</div>
								<div class="details">
									<p>
										Tener los recursos necesarios y personal idóneo para lograr la satisfacción de nuestros clientes.
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/p2.jpg" alt="">
									</div>
								</div>
								<div class="details">
									<p>
										Cumplir con los requisitos aplicables, las normas legales vigentes y el mejoramiento continuo del Sistema de Gestión de la Calidad.
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/p3.jpg" alt="">
									</div>
								</div>
								<div class="details">
									<p>
										Mantener procesos orientados hacia el mejoramiento continuo y la efectividad en el Sistema de Gestión de Calidad de la Institución.
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/p4.jpg" alt="">
									</div>
								</div>
								<div class="details">
									<p>
										Actuar de manera ética y responsable, contribuyendo al desarrollo sostenible de nuestra comunidad y medio ambiente.
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/p1.jpg" alt="">
									</div>
								</div>
								<div class="details">
									<p>
										Ofrecer programas educativos que cumplan con estándares de calidad, utilizando metodologías innovadoras y recursos para facilitar el aprendizaje.
									</p>
								</div>
							</div>
			</section>
			<!-- End popular-course Area -->


			<!-- Start search-course Area -->
			<section class="search-course-area relative"  id="aspirantes">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								¡Inscríbete ahora y disfruta de
								beneficios exclusivos!
							</h1>
							<p>
								Imagina un mundo de posibilidades. En Instituto Porfirio Barbara Jacob, tus sueños cobran vida.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#">
										<h4>Instructores expertos</h4>
									</a>
									<p>
									"Aprende de los mejores: nuestros instructores expertos combinan experiencia profesional con una pasión única por enseñar. ¡Descubre cómo tu futuro puede estar en manos de quienes inspiran y lideran con excelencia!"
									</p>
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#">
										<h4>Certificación</h4>
									</a>
									<p>
									"¡Tu futuro respaldado por excelencia! Nuestra institución cuenta con certificaciones reconocidas que garantizan calidad educativa, estándares internacionales y confianza en cada paso de tu formación. ¡Certifícate con los mejores y abre puertas al éxito!"
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Buscar curso con cupos disponibles</h4>
								<input type="text" class="form-control" name="name" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'">
								<input type="phone" class="form-control" name="phone" placeholder="Celular" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Celular'">
								<input type="email" class="form-control" name="email" placeholder="Correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'">
								<div class="form-select" id="service-select">
									<select>
										<option datd-display="">Elegir curso</option>
										<option value="TÉCNICO LABORAL EN AUXILIAR DE EDUCACIÓN PARA LA PRIMERA INFANCIA">Técnico laboral en auxiliar de educación para la primera infancia</option>
										<option value="CONOCIMIENTOS ACADÉMICOS EN PREPARACIÓN PARA LA VALIDACIÓN DEL
											BACHILLERATO">Conocimientos académicos en preparación - validación del bachillerato</option>
									</select>
								</div>
								<button class="primary-btn text-uppercase">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End search-course Area -->


			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Próximos eventos</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey1.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										Estamos emocionados de darte la bienvenida a nuestra comunidad. Aquí encontrarás un espacio donde crecer, aprender y formar amistades duraderas. ¡Prepárate para vivir una experiencia inolvidable!
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">									
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey2.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										¡Bienvenido a la familia! Este es el inicio de un emocionante viaje lleno de aprendizaje y descubrimiento. Te invitamos a explorar todas las oportunidades que nuestra institución te ofrece.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey1.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										¡Unidos somos más fuertes! Nos alegra que te unas a nuestra comunidad. Aquí encontrarás un ambiente de colaboración y apoyo mutuo que te permitirá alcanzar tus metas.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey2.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										¡Bienvenido al mundo de las nuevas tecnologías! Aquí encontrarás todo lo que necesitas para convertirte en un profesional exitoso.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey1.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										Estamos emocionados de darles la bienvenida a nuestra comunidad. Prepárense para vivir una experiencia única llena de aprendizaje y crecimiento. ¡Los esperamos con los brazos abiertos!
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Febero, 2025</p>
									<img class="img-fluid" src="img/ey2.jpg" alt="">
									<a href="#">
										<h4>Bienvenida a nuestros estudiantes</h4>
									</a>
									<p>
										¡Súper emocionados de darles la bienvenida! Aquí encontrarán un ambiente lleno de energía y oportunidades. ¡A comenzar esta nueva etapa!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End upcoming-event Area -->

			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Sofía García</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Alejandro Fernández</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Sofía García</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Alejandro Fernández</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Sofía García</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Alejandro Fernández</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Alejandro Fernández</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#">
										<h4>Sofía García</h4>
									</a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Comparte tus conocimientos y descubre nuevos accesorios con tus compañeros. En nuestra sección encontrarás desde los básicos hasta los más innovadores dispositivos para que puedas sacar el máximo partido a tu equipo. ¡Visítanos y descubre las últimas novedades
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End review Area -->

			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Trabaja con nosotros</h1>
							<p>
								Descubre las oportunidades de crecimiento en Instituto Porfirio Barbara Jacob
							</p>
							<a class="primary-btn wh" href="#">Solicitar el puesto</a>
						</div>
					</div>
				</div>
			</section>

			<!-- start footer Area -->
			<?php include 'controller/footer.php' ?> <!--#footer-->
			<!-- End footer Area -->


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.tabs.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>

		</html>