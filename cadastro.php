<?php session_start();?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stuff Template</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php"><img src="images/logo.png" class="img-responsive" alt="html5 bootstrap template"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><div class="buscar-caja">
                      <input type="text" name="" class="buscar-txt" placeholder="Buscar..."/>
                      <a class="buscar-btn">
                        <img src="images/lupa.png" style="width: 15px; height: 15"></img>
                      </a>
                   </div>
								</li>
								<li><a href="index.html">Home</a></li>
								<li><a href="historias.html">Histórias</a></li>
								<li><a href="galeria.html">Galeria</a></li>
								<li><a href="iffar.html">Sobre o IFFar</a></li>
								<li  class="active"><a href="cadastro.php">Cadastro</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="colorlib-container">
			<div class="container">
		      <center><form class="register-form" method="POST" action="cadastrar.php">
							<h3>Cadastre-se</h3>
							<input type="text" name="nome" placeholder="Nome"required><br /><br />
							<input  type="text" name="curso" placeholder="Curso" required><br /><br />
							<input type="text" name="cpf" placeholder="CPF"required><br /><br />
							<input type="text" name="ano_formatura" placeholder="Ano de Formatura"required><br /><br />
							<input type="password" name="senha" placeholder="Senha" required><br /><br />
							<button type='submit'>cadastrar</button>
					</form>
					Já tem cadastro? <a href="login.php">Clique aqui</a>
			</div></center>
		</div>
		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>
		<footer id="colorlib-footer">
			<div class="row">
				<div class="col-md-12">
					<p style="color: black">
						<small class="block">
							© Copyright 2019 - All Rights Reserved
					</p>
				</div>
			</div>
		</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
