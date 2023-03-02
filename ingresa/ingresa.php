
<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="kopernet" content="Kopernet.com" />
	<meta name="description" content="Ingresa a tu cuenta del programa de lealtad Love Points." />
	<meta name="keywords" content="privacidaad, programa de lealtad, V Motel, love points, puntos, motel, hotel, recompensas" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="../css/custom.css" type="text/css" />

	<!-- Document Title
	============================================= -->
  <title>Ingresa a tu cuenta| Love Points</title>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	<style>

		#login-form .dark .form-control:not(.not-dark),
		#login-form .dark .form-control:not(.not-dark):active,
		#login-form .dark .form-control:not(.not-dark):focus {
			background-color: transparent;
			border: 0;
			border-bottom: 2px solid rgba(255,255,255,0.6);
			padding: 0 4px;
			text-shadow: none;
			color: #FFF;
		}

		#login-form .dark .form-control:active,
		#login-form .dark .form-control:focus {
			border-color: var(--danger) !important;
			background-color: rgb(255,39,0,0.2) !important;
			color:#FFF !important;
		}

		#login-form .alert-success {
				color: #FFF;
				background-color: transparent !important;
				border: none !important;
				font-size: 20px;
				text-align: center;
				line-height: 1.8;
		}

		@-webkit-keyframes scale-center {
			0% {
				opacity: 0;
				-webkit-transform: scale(0.9);
								transform: scale(0.9);
			}
			100% {
				opacity: 1;
				-webkit-transform: scale(1);
								transform: scale(1);
			}
		}
		@keyframes scale-center {
			0% {
				opacity: 0;
				-webkit-transform: scale(0.9);
								transform: scale(0.9);
			}
			100% {
				opacity: 1;
				-webkit-transform: scale(1);
								transform: scale(1);
			}
		}
	</style>

</head>

<body class="stretched dark">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
    <header id="header" class="full-header transparent-header dark no-sticky">
			<div id="header-wrap" style=" border-top-width: 0px !important; border-left-width: 0px !important; border-right-width: 0px !important; border-bottom-width: 1px; border-bottom-style: solid; border-image: linear-gradient(45deg, rgb(36,0,191), rgb(259,39,0), rgb(238,226,71)) 1;">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" style=" border-style: none !important;">
							<a href="../index.php" class="standard-logo" data-dark-logo="../images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
							<a href="../index.php" class="retina-logo" data-dark-logo="../images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc"></div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container" style=" border-style: none !important;">
								<li class="menu-item">
									<a class="menu-link" href="../registro.php"><div>Reg&iacute;strate</div></a>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="../como-funciona.php"><div>&iquest;C&oacute;mo funciona?</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="../love-hotels.php"><div>Love Hotels afiliados</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="./"><div>Ingresa</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="form-widget" data-alert-type="inline" data-loader="button" data-redirect="../cuenta.php">

						<div class="card mx-auto rounded-0 border-0" style="max-width: 400px;" >
							<div class="card-body " style="padding: 40px;">
								<form id="login-form" name="login-form" class="mb-0" method="post" action="../php/entrar_process.php" enctype="multipart/form-data">
									<h3>Ingresa a tu cuenta<br />Love Points</h3>

									<div class="row dark">
										<div class="col-12 form-group">
											<label for="login-form-username">Correo: *</label>
											<input type="email" id="login-form-username" name="login-form-username" value="" class="form-control not-dark required" />
										</div>

										<div class="col-12 form-group">
											<label for="login-form-password">Contrase&ntilde;a: *</label>
											<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark required" />
										</div>

										<div class="col-12 form-group mb-0">
											<button type="submit" class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login" style=" background-color: #ff0056;">Ingresar</button>
											<a href="../recuperacion/" class="float-right">&iquest;Olvidaste tu contrase&ntilde;a?</a>
										</div>
									</div>
								</form>

								<div class="line line-sm"></div>
								<div class="form-result"></div>

							</div>
						</div>

					</div>

				</div>
			</div>
		</section>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="../js/jquery.js"></script>
	<script src="../js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="../js/functions.js"></script>

</body>
</html>
