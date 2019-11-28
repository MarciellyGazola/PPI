<?php
   include "conexao.php";

   if(!isset($_post['pesquisas'])) {
   $termo = $_POST['buscar'];

   $sql = "select * from historias where titulo LIKE '%$termo%' or historia LIKE '%$termo%' and estado = 1 order by dataa desc";
   $result = mysqli_query($link, $sql);
   $array0 = mysqli_fetch_array($result);
 }else {
   $sql = "select * from historias where estado = 1 order by dataa desc";
   $result = mysqli_query($link, $sql);
   $array0 = mysqli_fetch_array($result);
 }
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
                <li><a href="indexUsu.php">Home</a></li>
                <li class="active"><a href="historiasUsu.php">Histórias</a></li>
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
    <div id="colorlib-container">
			<div class="container">
        <div class="col-md-12">
						<h1>Histórias</h1><h4>Aqui você vai encontrar todas as hsitórias cadastradas no sistema!</h4>
          </div>
      <div class='row row-pb-md'>

     <?php
     foreach($result as $post) {
       $sql2 = "select * from img where id_hist = $post[id_hist]";
       $result2 = mysqli_query($link, $sql2);
       $post2 = mysqli_fetch_array($result2);
       $sql3 = "select * from usuario where id_user = $post[id_user]";
       $result3 = mysqli_query($link, $sql3);
       $post3 = mysqli_fetch_array($result3);
       echo "<div class='col-md-4'>
        <a href='historiaUsu.php?id=". $post['id_hist']."&id_user=".$post['id_user']."&id_img=".$post2['id_img']."'>
						<div class='blog-entry'>
							<div class='blog-img'>
                <input type='hidden' name='id_hist' value='" . $post['id_hist'] ."'>
                <input type='hidden' name='id_img' value='" . $post2['id_img'] ."'>
                <input type='hidden' name='id_user' value='" . $post3['id_user'] ."'>
								<img src=". $post2['endereco'] . " class='img-responsive' alt='html5 bootstrap template'>
							</div>
							<div class='desc'>
								<p class='meta'>
									<span class='date' style='color: black;'>". date('d-m-Y', strtotime($array0['dataa'])) ."</span>
									<span class='pos'>By  ". $post3['nome'] ."</span>
								</p>
								<h2>". $post['titulo'] ."</h2>
							</div>
						</div>
            </a>
					</div>
    ";}; ?>


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
