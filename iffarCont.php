<?php
  session_start();
  if(!$_SESSION['usuario']){
      header("location:login.php");
  }else{
      if($_SESSION['tipo'] != 2){
          header("location:login.php");
      }
  }
 ?>
<html>
	<head>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

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

	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html"><img src="images/logo.png" class="img-responsive" alt="html5 bootstrap template"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
              <ul>
                <form action="buscarCont.php" method="post">
                <li><div class="buscar-caja">
                      <input type="text" name="buscar" class="buscar-txt" placeholder="Buscar..."/>
                      <a class="buscar-btn">
                        <img src="images/lupa.png" style="width: 15px; height: 15"></img>
                      </a>
                   </div>
                </li>
              </form>
                <li><a href="indexCont.php">Home</a></li>
                <li class="has-dropdown">
                  <a>Histórias</a>
                  <ul class="dropdown">
                    <li><a href="historiasCont.php">Publicadas</a></li>
                    <li><a href="cadastroPub.php">Cadastrar</a></li>
                  </ul>
                </li>
                <li class="active"><a href="iffarCont.php">Sobre o IFFar</a></li>
                <li><a href="cadastroCont.php">Cadastrar</a></li>
                <li class="has-dropdown">
                  <a>Perfil</a>
                  <ul class="dropdown">
                    <li><a href="perfilCont.php">Ver</a></li>
                    <li><a href="editarCadastroCont.php">Editar</a></li>
                    <li><a href="logout.php">Sair</a></li>
                  </ul>
                </li>
              </ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

    <div id="colorlib-container">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
          <img class="img-responsive" src="images/fundo.jpg" alt="">
          </div>
          <div class="col-md-12">
            <p>A história do campus do atual Instituto Federal Farroupilha de Frederico Westphalen inicia-se em 11 de abril de 1966 com a primeira turma do técnico agrícola, mas, não era o instituto do qual conhecemos hoje, e sim, ligado à Universidade Federal de Santa Maria.</p>
            <p> O nome era colégio agrícola de Frederico Westphalen e era conhecido popularmente pela sigla CAFW, onde se oferecia diversos cursos técnicos, mas, novas bases para a Educação Nacional foram estabelecidas. Assim o colégio Agrícola passa a implantar a reforma e separar o Ensino Médio da Educação Profissional.</p>
            <p>No ano de 2014 o conselho superior da UFSM aprovou a migração do colégio Agrícola, passando a se vincular como Instituto Federal de Educação, Ciência e Tecnologia Farroupilha.</p>
            <blockquote>
              alguma coisa?
            </blockquote>
            <p class="first-letra">Far far away, <strong><a href="#">colocar link iffar</a></strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>
              <ul class="colorlib-social-icons">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
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
