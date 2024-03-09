<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Forn Sant Rock</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	 

	<!-- fuentes de texto -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- Estilos ace  -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />
	<!-- Estilos Personalizado  -->
	<link rel="stylesheet" href="assets/css//estilo_propio.css" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- HTML5shiv y Respond.js para IE8 para admitir elementos de HTML5 y consultas de medios -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>


<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row center" >
				<div class="col">
					<img id="santo" src="assets/images/iconos/Santo.png" alt="">
				</div>
				<div class="col-1">
					<h1 class="white">Forn Pasticeria</h1>
				</div>
				<div class="col-1">
					<h1 class="red" id="id-text2">Sant Roc</h1>
				</div>
			</div>
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center">
						<h4 class="blue" id="id-company-text">&copy; Impartiendo Conocimiento</h4>
					</div>

					<div class="space-6"></div>

					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="ace-icon fa fa-coffee green"></i>
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

											<div class="clearfix">
												<label class="inline">
													<input type="checkbox" class="ace" />
													<span class="lbl"> Recordarme</span>
												</label>

												<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
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
								</div><!-- /.widget-main -->


								<div class="toolbar center">
									<a href="#" data-target="#login-box" class="back-to-login-link">
										Regresar al Login
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.forgot-box -->

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