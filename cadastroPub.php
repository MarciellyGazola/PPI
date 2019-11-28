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
  							<div id="colorlib-logo"><a href="indexAdm.php"><img src="images/logo.png" class="img-responsive" alt="html5 bootstrap template"></a></div>
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
                  <li class="has-dropdown active">
  									<a>Histórias</a>
  									<ul class="dropdown">
  										<li><a href="historiasCont.php">Publicadas</a></li>
  										<li><a href="cadastroPub.php">Cadastrar</a></li>
  									</ul>
  								</li>
  								<li><a href="iffarCont.php">Sobre o IFFar</a></li>
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
       <div class="container"><center>
        <form action="cadastrarPub.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php $_SESSION['id_user']; ?>">
          Título:<br /> <input type="text" name="titulo" required><br /><br />
          Publicação:<br /> <input type="text" name="pub" required><br><br />
          Fotos: <br /><input type="file" required name="arquivo"><br>
          <input type="submit">
        </form></center>
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
