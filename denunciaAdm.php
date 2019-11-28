<?php
  session_start();
  include "conexao.php";
  if(!$_SESSION['usuario']){
      header("location:login.php");
  }else{
      if($_SESSION['tipo'] != 3){
          header("location:login.php");
      }
  }

  $sql = "select * from denuncia order by data_ asc";
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
							<div id="colorlib-logo"><a href="indexAdm.php"><img src="images/logo.png" class="img-responsive" alt="html5 bootstrap template"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
              <ul>
                <form action="buscarAdm.php" method="post">
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
                <li class="has-dropdown">
									<a>Perfil</a>
									<ul class="dropdown">
										<li><a href="perfilAdm.php">Ver</a></li>
										<li><a href="editarCadastroAdm.php">Editar</a></li>
                    <li><a href="logout.php">Sair</a></li>
									</ul>
								</li>
								<li class="active"><a href="denunciaAdm.php">Denúncias</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="colorlib-container">
			<div class="container">
						<h1>Comentários que foram denunciados por outros usuários</h1><br />
        <div class="row row-pb-lg">
          <div class="col-md-12">
            <?php
            foreach($result as $post) {
              $sql8 = "select * from comentarios where id_coment = $post[id_coment]";
              $result8 = mysqli_query($link, $sql8);
              $post8 = mysqli_fetch_array($result8);
              $sql6 = "select * from usuario where id_user = $post8[id_user]";
              $result6 = mysqli_query($link, $sql6);
              $post6 = mysqli_fetch_array($result6);
              $sql7 = "select * from img where id_user = $post8[id_user]";
              $result7 = mysqli_query($link, $sql7);
              $post7 = mysqli_fetch_array($result7);
              ?> <div class="review">
                <div class='user-img' style="background-image: url(<?php echo $post7['endereco'] ?>)"></div>
                <div class='desc' style="margin-top: 1px;">
                  <h4>
                    <span class='text-left'><?php echo $post6['nome'] ?></span>
                  </h4>
                  <p><?php echo $post8['comentario'] ?></p>
                  <p class='star'>
                  <form action='apagarComent.php' method='POST'>
                    <input type='hidden' name='come' value='<?php echo $post['id_coment'] ?>'>
                    <input type="submit" value='' class="iconb" style="background-image: url('arquivos/apagar.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;">
                <form action='TudoCerto.php' method='POST'>
                  <input type='hidden' name='come' value='<?php echo $post['id_coment'] ?>'>
                  <input type='submit' value='' class="iconb" style="background-image: url('arquivos/valido.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;">
              </form>
              </p>
                </div>
              </div>
           <?php ;}; ?>
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
