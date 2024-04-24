<?php
require_once "authentication.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Forn Pasticeria Sant Roc</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- Estilos Personalizado CSS -->
	<link rel="stylesheet" href="../css/estilo_propio.css" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/ace-rtl.min.css" />
	<!-- Estilos ace  -->
	<link rel="stylesheet" href="../css/ace.min.css" />
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="../plugins/sweetAlert2/dist/sweetalert2.min.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="../css/ace-part2.min.css" />
		<![endif]-->
	<!--iconos de fontawesome-->
	<script src="https://kit.fontawesome.com/7a3144b989.js" crossorigin="anonymous"></script>

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../css/ace-ie.min.css" />
		<![endif]-->

	<!-- HTML5shiv y Respond.js para IE8 para admitir elementos de HTML5 y consultas de medios -->

	<!--[if lte IE 8]>
		<script src="../js/html5shiv.min.js"></script>
		<script src="../js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="container-fluid login-layout">
	<!--Header-->
	<div class="row Header" id="titulo">
		<div class="col-md-1  col-sm-12 d-md-block d-none"></div>
		<div class="col-md-1  col-sm-12 d-md-block d-none">
			<img id="santo" src="../images/iconos//Santo.png" alt="">
		</div>
		<div class="col-md-7 col-sm-12">
			<h1>Forn Pasticeria Sant Roc</h1>
		</div>
		<div class="col-md-1  col-sm-12 d-md-block d-none">
			<img id="santo" src="../images/iconos//Santo.png" alt="">
		</div>
	</div>
	<!--section-->
	<div class="row section">
		<!--carrusel de imagenes-->
		<div class="main-content col-md-8 col-sm-12" id="carrusel">
			<div id="carusel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="4" aria-label="Slide 5"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="1500">
						<img src="../images/productos/tarta_50.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block text-dark">
							<h5>Tarta de numeros</h5>
							<p>Tarta de Chocolate de chocolate blanco con fresas lacasitos moras y muchco más. .</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/productos/tarta_rectangular.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block text-dark">
							<h5>Tarta Especial</h5>
							<p>Una tarta con una base rectangular con chocolate nata y mas chocolate, tambien algunas frustas y otros dulces..</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/productos/mostrador.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block text-dark">
							<h5>Mostrador 1</h5>
							<p>Esta parte del Mostrador contiene toda la bolleria y en el fondo se puede contemplar el pan.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/productos/mostrador2.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block text-dark">
							<h5>Mostrador 2</h5>
							<p>Esta parte del Mostrador contiene Pasteleria y las cocas con cremas y mas contenido diferente.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../images/productos/mostrador3.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block text-dark">
							<h5>Mostrador 3</h5>
							<p>Esta parte del Mostrador contiene un poco de dulce y todo el salado (pizzas,empanadas,...).</p>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carusel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carusel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!--Inicio de sesion-->
		<div class="main-content col-md-4 col-sm-12" id="ingresar">
			<div class="position-relative">
				<div id="login-box" class="login-box visible widget-box no-border">
					<div class="widget-body">
						<div class="widget-main">
							<h4 class="header blue lighter bigger">
								<i class="ace-icon fa fa-coffee red"></i>
								Regístrate para poder ver mas productos!
							</h4>

							<div class="space-6"></div>

							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
								<fieldset>
									<label class="block clearfix">
										<span class="block input-icon input-icon-right">
											<input type="text" class="form-control" name="user" placeholder="Usuario" />
											<i class="ace-icon fa fa-user"></i>
										</span>
									</label>

									<label class="block clearfix">
										<span class="block input-icon input-icon-right">
											<input type="password" name="pass" class="form-control" placeholder="Contraseña" />
											<i class="ace-icon fa fa-lock"></i>
										</span>
									</label>

									<div class="space"></div>

									<div class="clearfix row">
										<label class="inline col-6">
											<input type="checkbox" class="ace" />
											<span class="lbl"> Recordarme</span>
										</label>

										<button type="submit" class="width-35 btn btn-sm btn-info col-6" name="submit">
											<i class="fa-solid fa-baguette"></i>
											<span class="bigger-110">Ingresar</span>
										</button>
									</div>

									<div class="space-4"></div>
								</fieldset>
							</form>

							<div class="social-or-login center">
								<span class="bigger-110">Suscribete</span>
							</div>

							<div class="space-6"></div>

							<div class="social-login center">
								<a href="https://www.youtube.com/@connybroese" target="_blank" class="btn btn-danger">
									<i class="ace-icon fa fa-youtube"></i>
								</a>
								<a href="https://www.facebook.com/profile.php?id=61557043859565" target="_blank" class="btn btn-primary">
									<i class="ace-icon fa fa-facebook"></i>
								</a>

								<a href="https://twitter.com/jasingafi" target="_blank" class="btn btn-info">
									<i class="ace-icon fa fa-twitter"></i>
								</a>

								<a href="https://www.instagram.com/fpsr.albal/" target="_blank" class="btn btn-danger">
									<i class="ace-icon fa fa-instagram"></i>
								</a>
							</div>
						</div><!-- /.widget-main -->

						<div class="toolbar clearfix">
							<div>
								<a href="#" data-target="#forgot-box" class="forgot-password-link">
									<i class="ace-icon fa fa-arrow-left"></i>
									Olvide mi contraseña
								</a>
							</div>

							<div>
								<a href="#" data-target="#signup-box" class="user-signup-link">
									Nuevo Registro
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div><!-- /.widget-body -->
				</div><!-- /.login-box -->

				<div id="forgot-box" class="forgot-box widget-box no-border">
					<div class="widget-body">
						<div class="widget-main">
							<h4 class="header red lighter bigger">
								<i class="ace-icon fa fa-key"></i>
								Recuperar Contraseña
							</h4>

							<div class="space-6"></div>
							<p>
								Ungresa tu correo electronico para recibir las instrucciones
							</p>

							<form>
								<fieldset>
									<label class="block clearfix">
										<span class="block input-icon input-icon-right">
											<input type="email" class="form-control" placeholder="Email" />
											<i class="ace-icon fa fa-envelope"></i>
										</span>
									</label>
									<div class="clearfix">
										<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
											<i class="ace-icon fa fa-lightbulb-o"></i>
											<span class="bigger-110">Enviar</span>
										</button>
									</div>
								</fieldset>
							</form>
						</div>


						<div class="toolbar center">
							<a href="#" data-target="#login-box" class="back-to-login-link">
								Regresar al Login
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
					< </div>

						<div id="signup-box" class="signup-box widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header green lighter bigger">
										<i class="fa-solid fa-user blue" style="margin-bottom: 0.3vw;"></i>
										Registro de Nuevos Usuarios
									</h4>
									<div class="space-6"></div>
									<p>Ingresa los datos solicitados acontinuacion: </p>
									<form action="registro.php" method="post" enctype="multipart/form-data">
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="file" name="imagen_perfil" accept="image/*" required onchange="mostrarImagenSeleccionada(this)" />
													<img id="imagen_seleccionada" src="#" alt="Imagen seleccionada" style="max-width: 100px; max-height: 100px;">
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required />
													<i class="ace-icon fa fa-users"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="email" class="form-control" name="correo" placeholder="Email" required />
													<i class="ace-icon fa fa-envelope"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="tel" class="form-control" name="telefono" pattern="[0-9]{9}" title="El número de teléfono debe ser de 9 dígitos." required />
													<i class="ace-icon fa fa-phone"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" class="form-control" name="user" placeholder="Usuario" required />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" id="pass1" name="pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" title="La contraseña debe contener al menos una mayúscula, una minúscula y un número, y tener al menos 8 caracteres." required />
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" name="passr" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" title="La contraseña debe contener al menos una mayúscula, una minúscula y un número, y tener al menos 8 caracteres." placeholder="Repetir password" id="pass2" required />
													<i class="ace-icon fa fa-retweet"></i>
												</span>
											</label>
											<label class="block">
												<input type="checkbox" class="ace" required />
												<span class="lbl">
													Acepto los
													<a href="#">Terminos de Uso</a>
												</span>
											</label>
											<div class="space-24"></div>
											<div class="clearfix">
												<button type="reset" class="width-30 pull-left btn btn-sm">
													<i class="ace-icon fa fa-refresh"></i>
													<span class="bigger-110">Reset</span>
												</button>
												<button type="submit" name="registrar" class="width-65 pull-right btn btn-sm btn-success">
													<span class="bigger-110">Registrar</span>
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</fieldset>
									</form>

								</div>

								<div class="toolbar center">
									<a href="#" data-target="#login-box" class="back-to-login-link">
										<i class="ace-icon fa fa-arrow-left"></i>
										Regresar al Login
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.signup-box -->
				</div><!-- /.position-relative -->
			</div>
		</div>

		<!-- Bibiloteca SweetAlert2-->
		<script src="../plugins/sweetAlert2/dist/sweetalert2.min.js"></script>
		<script src="../js/saludo.js"></script>


		<!--Version JQuery de Internet Explorer-->
		<!--[if IE]>
							<script src="../js/jquery-1.11.3.min.js"></script>
						<![endif]-->

		<!--Mejora la experiencia de usuario en dispositivos táctiles -->
		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement) document.write("<script src='../js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
		</script>
		<!--Cargar JQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>

		<!--Mostrar/Ocultarnuevo registro o olvide mi contraseña -->
		<script type="text/javascript">
			jQuery(function($) {
				$(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible'); //ocultar otros
					$(target).addClass('visible'); //Mostrar objeto
				});
			});

			function mostrarImagenSeleccionada(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function(e) {
						document.getElementById('imagen_seleccionada').src = e.target.result;
						document.getElementById('imagen_seleccionada').style.display = 'block';
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
		<!--Cargar bootstrap.js -->
		<script src="../js/bootstrap.min.js"></script>
	</div>
	<!--Footer-->
	<div class="row" id="footer">
		<!-- Grid container -->
		<div class="container p-4">
			<!-- Section: Links -->
			<section class="">
				<!--Grid row-->
				<div class="row">
					<!--Grid column-->
					<div class="col-lg-2 col-md-3 col-sm-2 mb-4 mb-md-0">
						<ul class="list-unstyled mb-0">
							<li>
								<a href="../../index.php"><img class="logo" src="../images/otros/LogoT.png" alt=""></a>
							</li>
						</ul>
					</div>
					<!--Grid column-->
					<div class="col-lg-2 col-md-3 col-sm-2 mb-4 mb-md-0">
						<h5 class="text-uppercase">Nosotros</h5>
						<ul class="list-unstyled mb-0">
							<li>
								<p>Teléfono: 961 26 61 78</p>
							</li>
						</ul>
					</div>
					<!--Grid column-->
					<div class="col-lg-2 col-md-3 col-sm-2 mb-4 mb-md-0">
						<h5 class="text-uppercase">Horario</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<p><b>Lunes a Viernes:</b> 8:00–14:00, 17:00–20:00 <br> <b>Sabados:</b> 8:00–14:00 <br> <b>Domingos:</b> Cerrado</p>
							</li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-2 mb-4 mb-md-0">
						<h5 class="text-uppercase">Encuantranos Aqui</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1296.3826565469656!2d-0.41477533304418035!3d39.3939274121536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604dd2c1d5a2b5%3A0xa3e4d9f16f752fff!2sHorno%20Pasteler%C3%ADa%20San%20Roque!5e0!3m2!1ses!2ses!4v1713091140916!5m2!1ses!2ses" width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</li>
						</ul>
					</div>
				</div>
				<!--Grid row-->
			</section>
			<!-- Section: Links -->

		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
			© 2023 Copyright:
			<small>Proyecto Jose Rubio 2023/2024</small>
		</div>
		<!-- Copyright -->

	</div>

	<script>

	</script>



</body>


</html>