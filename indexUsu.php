<?php
  session_start();
  include "conexao.php";
  if(!$_SESSION['usuario']){
      header("location:login.php");
  }else{
      if($_SESSION['tipo'] != 1){
          header("location:login.php");
      }
  }
  $sql = "select * from historias order by dataa desc limit 3";
  $result = mysqli_query($link, $sql);

 ?>
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
							<div id="colorlib-logo"><a href="indexUsu.php"><img src="images/logo.png" class="img-responsive" alt="html5 bootstrap template"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
              <ul>
                <form action="buscarUsu.php" method="post">
								<li><div class="buscar-caja">
                      <input type="text" name="buscar" class="buscar-txt" placeholder="Buscar..."/>
                      <a class="buscar-btn">
                        <img src="images/lupa.png" style="width: 15px; height: 15"></img>
                      </a>
                   </div>
								</li>
              </form>
                <li  class="active"><a href="indexUsu.php">Home</a></li>
                <li><a href="historiasUsu.php">Histórias</a></li>
								<li><a href="iffarUsu.php">Sobre o IFFar</a></li>
                <li class="has-dropdown">
									<a>Perfil</a>
									<ul class="dropdown">
										<li><a href="perfilUsu.php">Ver</a></li>
										<li><a href="editarCadastroUsu.php">Editar</a></li>
                    <li><a href="logout.php">Sair</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
    <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
          <?php
              if(mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)){
                      $sql2 = "select * from img where id_hist = $row[id_hist]";
                      $result2 = mysqli_query($link, $sql2);
                      $post2 = mysqli_fetch_array($result2);
                      $sql3 = "select * from usuario where id_user = $row[id_user]";
                      $result3 = mysqli_query($link, $sql3);
                      $post3 = mysqli_fetch_array($result3);
                      echo "<li style='background-image: url(" . $post2['endereco'] . ");'>
            			   		<div class='overlay'></div>
            			   		<div class='container'>
            			   			<div class='row'>
            				   			<div class='col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text'>
            				   				<div class='slider-text-inner'>
            				   					<div class='desc'>
            				   						<p class='meta'>
            												<span class='date'>" . $row['dataa'] . "</span>
            												<span class='pos'>By  " . $post3['nome'] . "</a></span>
            											</p>
            					   					<h1>" . $row['titulo'] . "</h1>
            				   					</div>
            				   				</div>
            				   			</div>
            				   		</div>
            			   		</div>
            			   	</li>";
                  };
              };

              mysqli_close($link );
          ?>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-container">
			<div class="container">
				<p>
          O baú de memórias foi desenvolvido durante ao longo do ano de 2019 pela turma do 2° ano do técnico em informática como a prática profissional integrada. Com isso, não tendo apenas o aprendizado das matérias do técnico mas também tendo um local virtual para que quem já esteve ou está, ligado de alguma forma com o campus tenha onde depositar suas memórias, compartilhá-las  com os outros e interagir com os mesmos, mantendo sua ligação mesmo após com o passar dos anos.
	      </p>
        <p>
          Dentro desse site, você encontra diversas opções de como interagir primeiramente precisa-se estar cadastrado para poder dar like em publicações e comentá-las. Caso seja de interesse de um usuário, poderá solicitar ser contribuidor da página para publicar também as suas memórias, com isso terá que solicitar e aguardar a resposta do administrador.
	      </p>
        <p>
          Nós esperamos que os usuários sintam-se confortáveis e nostálgicos em reviver suas lembranças com os colegas. Aproveite o site!
        </p>
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
