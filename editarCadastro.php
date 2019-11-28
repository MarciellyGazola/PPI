<?php
session_start();
include 'conexao.php';

$id = $_SESSION['usuario'];
$sql1 = "select * from img where id_user = '$id'";
$result = mysqli_query($link, $sql1);
$array1 = mysqli_fetch_array($result);

	$sql2 = "select * from usuario where id_user = '$id'";
	$result2 = mysqli_query($link, $sql2);
	$array = mysqli_fetch_array($result2);

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
 							 <form action="buscar.php" method="post">
 							 <li><div class="buscar-caja">
 										 <input type="text" name="buscar" class="buscar-txt" placeholder="Buscar..."/>
 										 <a class="buscar-btn">
 											 <img src="images/lupa.png" style="width: 15px; height: 15"></img>
 										 </a>
 									</div>
 							 </li>
 						 </form>
 							 <li><a href="indexAdm.php">Home</a></li>
 							 <li class="has-dropdown">
 								 <a>Histórias</a>
 								 <ul class="dropdown">
 									 <li><a href="historiasAdm.php">Publicadas</a></li>
 									 <li><a href="pendentes.php">Pendentes</a></li>
 								 </ul>
 							 </li>
 							 <li><a href="iffarAdm.php">Sobre o IFFar</a></li>
 							 <li class="has-dropdown active">
 								 <a>Perfil</a>
 								 <ul class="dropdown">
 									 <li><a href="perfilAdm.php">Ver</a></li>
 									 <li><a href="editarCadastroAdm.php">Editar</a></li>
 									 <li><a href="logout.php">Sair</a></li>
 								 </ul>
 							 </li>
 							 <li><a href="denunciaAdm.php">Denúncias</a></li>
 						 </ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
   <div id="colorlib-container">
     <div class="container">
			 <form method ="POST" action="atualizarcadastro.php" enctype="multipart/form-data">

					 <input type = "hidden" name="id" value="<?php echo $id;?>" >

			 <div class = "divgrande">

					 <div class="divfoto">
						 <img src="/arquivos/<?php echo $array1['endereco']; ?>"  class="avatareditar">
					 </div>

					 <div class="form-group">
						 <label for="exampleInputName1">Nome</label>
						 <input type="text" name="nome" value ="<?php echo $array['nome']; ?>" class="form-control" placeholder='Nome'>
					 </div>

					 <div class="form-group">
						 <label for="exampleInputEmail1">CPF</label>
					 <input type="text" name="cpf" value ="<?php echo $array['cpf']; ?>" class="form-control" placeholder='CPF'>
				 </div>

					 <div class="form-group">
						 <label for="exampleInputEmail1">Curso</label>
					 <input type="text" name="curso" value ="<?php echo $array['curso']; ?>" class="form-control" placeholder='Curso'>
				 </div>

					 <div class="form-group">
						 <label for="exampleInputEmail1">Ano da Formatura</label>
					 <input type="text" name="ano_formatura" value ="<?php echo $array['ano_formatura']?>" class="form-control" placeholder='Ano'>
					 </div>

						 <div class="form-group">
						 <label for="exampleInputPassword1">Senha</label>
						 <input type="password" name="senha" value ="<?php echo $array['senha']?>" class="form-control" placeholder='Senha'>
					 </div>


					 <div class="form-group">
						 <label for="exampleFormControlFile1">Foto</label>
						 <input type="file" class="divfile" name="arquivo" required class="form-control-file" >
					 </div>

					 <input type="submit" class="btn btn-secondary" name="Editar">
					 <input type="hidden" name="imagem" value="<?php echo $array1['endereco']?>">

					 </center>
					 </div>
					 </form>
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
