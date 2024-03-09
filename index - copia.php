<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Forn Pasticeria Sant Roc</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- Estilos Personalizado  -->
	<link rel="stylesheet" href="assets/css//estilo_propio.css" />
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<!-- Estilos ace  -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<!--iconos de fontawesome-->
	<script src="https://kit.fontawesome.com/7a3144b989.js" crossorigin="anonymous"></script>

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- HTML5shiv y Respond.js para IE8 para admitir elementos de HTML5 y consultas de medios -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="container-fluid login-layout">
	<!--Header-->
	<div class="row" id="titulo">
		<div class="col-md-1  col-sm-12 d-md-block d-none">
			<img id="santo" src="assets/images/iconos//Santo.png" alt="">
		</div>
		<div class="col-md-11 col-sm-12">
			<h1>Forn Pasticeria Sant Roc</h1>
		</div>
	</div>

	<!--section-->
	<div class="row section">
		<!--carrusel de imagenes-->
		<div class="main-content col-md-1 col-sm-12"></div>
		<div class="main-content col-md-7 col-sm-12" id="carrusel">
			<div id="carusel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carusel" data-bs-slide-to="4" aria-label="Slide 5"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="500">
						<img src="assets/images/productos/tarta_50.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tarta de numeros</h5>
							<p>Tarta de Chocolate de chocolate blanco con fresas lacasitos moras y muchco más. .</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/productos/tarta_rectangular.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Tarta Especial</h5>
							<p>Una tarta con una base rectangular con chocolate nata y mas chocolate, tambien algunas frustas y otros dulces..</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/productos/mostrador.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Mostrador 1</h5>
							<p>Esta parte del Mostrador contiene toda la bolleria y en el fondo se puede contemplar el pan.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/productos/mostrador2.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Mostrador 2</h5>
							<p>Esta parte del Mostrador contiene Pasteleria y las cocas con cremas y mas contenido diferente.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/images/productos/mostrador3.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
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
		<div class="main-content col-md-4 col-sm-12">
			<div class="position-relative">
				<div id="login-box" class="login-box visible widget-box no-border">
					<div class="widget-body">
						<div class="widget-main">
							<h4 class="header blue lighter bigger">
								<i class="ace-icon fa fa-coffee red"></i>
								Ingresa tu Informacion
							</h4>

							<div class="space-6"></div>

							<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
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

										<button type="submit" class="width-35 btn btn-sm btn-info col-6">
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
								<a href="http://bit.ly/SuscribirseIC" target="_blank" class="btn btn-danger">
									<i class="ace-icon fa fa-youtube"></i>
								</a>
								<a href="https://www.facebook.com/impartiendoconocimiento" target="_blank" class="btn btn-primary">
									<i class="ace-icon fa fa-facebook"></i>
								</a>

								<a href="https://twitter.com/jasingafi" target="_blank" class="btn btn-info">
									<i class="ace-icon fa fa-twitter"></i>
								</a>

								<a href="https://www.instagram.com/jasingafi/" target="_blank" class="btn btn-danger">
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
										<i class="ace-icon fa fa-users blue"></i>
										Registro de Nuevos Usuarios
									</h4>
									<div class="space-6"></div>
									<p>Ingresa los datos solicitados acontinuacion: </p>
									<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
										<fieldset>
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
													<input type="text" class="form-control" name="user" placeholder="Usuario" required />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" name="pass" placeholder="Password" required />
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" name="passr" placeholder="Repetir password" />
													<i class="ace-icon fa fa-retweet"></i>
												</span>
											</label>

											<label class="block">
												<input type="checkbox" class="ace" />
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

		<!--Cargar JQuery -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!--Version JQuery de Internet Explorer-->
		<!--[if IE]>
							<script src="assets/js/jquery-1.11.3.min.js"></script>
						<![endif]-->

		<!--Mejora la experiencia de usuario en dispositivos táctiles -->
		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
		</script>

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
		</script>
		<!--Cargar bootstrap.js -->
		<script src="assets/js/bootstrap.min.js"></script>
</body>


</html>