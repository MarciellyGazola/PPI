<?php
  session_start();
  include "conexao.php";

  $id_hist = $_GET['id'];
  $id_img = $_GET['id_img'];
  $id_user = $_GET['id_user'];

  $sql1 = "select * from historias where id_hist = '$id_hist'";
  $result1 = mysqli_query($link, $sql1);
  $array1 = mysqli_fetch_array($result1);

  $sql2 = "select * from img where id_img = '$id_img'";
  $result2 = mysqli_query($link, $sql2);
  $array2 = mysqli_fetch_array($result2);

  $sql3 = "select * from usuario where id_user = '$id_user'";
  $result3 = mysqli_query($link, $sql3);
  $array3 = mysqli_fetch_array($result3);

  $sql4 = "select * from comentarios where id_hist = '$id_hist'";
  $result4 = mysqli_query($link, $sql4);
  $array4 = mysqli_fetch_array($result4);

  $sql5 = "select COUNT(comentario) from comentarios where id_hist = '$id_hist'";
  $result5 = mysqli_query($link, $sql5);
  $array5 = mysqli_fetch_array($result5);

  $array = $_SESSION['usuario'];

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
				<div class="row">


								<div class="blog-entry">
                  <div class="blog-img blog-detail">
        						<img class="img-responsive" src="<?php echo $array2['endereco']?>" alt="html5 bootstrap template">
        					</div>
									<div class="desc">
                    <form action="likeUsu.php" method="POST">
										<p class="meta">
											<span class="date"><?php echo $array1['dataa']?></span>
											<span class="pos">By <?php echo $array3['nome']?></span>
                      <input type='hidden' name='id_hist' value='<?php echo $array1['id_hist'] ?>'>
                      <input type='hidden' name='id_img' value='<?php echo $array2['id_img'] ?>'>
                      <?php
                          if($_SESSION['tipo'] == 2 or $_SESSION['tipo'] == 3 or $_SESSION['tipo'] == 1){
                            $sql7 = "select * from likar where id_user =" . $_SESSION['usuario'];
                            $query7 = mysqli_query($link, $sql7);
                            $rows7 = mysqli_num_rows($query7);

                            if($rows7 == 0) {
                              ?> <span class="pos"><input type="submit" value='' class="iconb" style="background-image: url('arquivos/like.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:15px 18px; background-color:none;"></span><?php
                            }else {
                              ?> <span class="pos"><input type="submit" value='' class="iconb" style="background-image: url('arquivos/comLike.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;"></span><?php
                            }
                            $sql6 = "select COUNT(id_like) from likar where id_hist =" . $array1['id_hist'];
                            $query6 = mysqli_query($link, $sql6);
                            $numLikes = mysqli_fetch_array($query6);
                            echo $numLikes["COUNT(id_like)"];
                          }
                      ?>
                      </form>
                      <form action="apagarUsu.php" method="POST">
                        <input type='hidden' name='id_hist' value='<?php echo $array1['id_hist'] ?>'>
                        <input type='hidden' name='id_img' value='<?php echo $array2['id_img'] ?>'>
                        <?php

                            if($_SESSION['tipo'] == 3 or $_SESSION['usuario'] == $id_user){
                              ?>

                              <span class="pos"><input type="submit" value='' class="iconb" style="background-image: url('arquivos/apagar.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;"></span><?php
                            }
                        ?>

                    </form>
										</p>
										<h2><a href="blog.html"><?php echo $array1['titulo']; ?></a></h2>
										<p><?php echo $array1['historia']?></p>
							</div>
              <?php
            if($_SESSION['tipo'] == 2 or $_SESSION['tipo'] == 3 or $_SESSION['tipo'] == 1){ ?>
            <div class="row row-pb-lg">
              <div class="col-md-12">
                <h2 class="heading-2"><?php echo $array5["COUNT(comentario)"]?> Comentário(s)</h2><br />
                <?php
                foreach($result4 as $post) {
                  $sql6 = "select * from usuario where id_user = $array";
                  $result6 = mysqli_query($link, $sql6);
                  $post6 = mysqli_fetch_array($result6);
                  $sql7 = "select * from img where id_user = $array";
                  $result7 = mysqli_query($link, $sql7);
                  $post7 = mysqli_fetch_array($result7);
                  ?> <div class="review">
                    <div class='user-img' style="background-image: url(<?php echo $post7['endereco'] ?>)"></div>
                    <div class='desc' style="margin-top: 1px;">
                      <h4>
                        <span class='text-left'><?php echo $post6['nome'] ?></span>
                      </h4>
                      <p><?php echo $post['comentario'] ?></p>
                      <form action='denuUsu.php' method='POST'>
                      <p class='star'>
                        <input type='hidden' name='come' value='<?php echo $post['id_coment'] ?>'>
                        <input type='hidden' name='id_hist' value='<?php echo $array1['id_hist'] ?>'>
                        <input type='hidden' name='id_img' value='<?php echo $array2['id_img'] ?>'>
                        <input type='submit' value='' class="iconb" style="background-image: url('arquivos/alert.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;">
                      </p>
                    </form>
                    <?php
                       if($_SESSION['tipo'] == 3 or $post['id_user'] == $array ){
                    ?>
                    <form action='apagarComent.php' method='POST'>
                    <p class='star'>
                      <input type='hidden' name='come' value='<?php echo $post['id_coment'] ?>'>
                      <input type='hidden' name='id_hist' value='<?php echo $array1['id_hist'] ?>'>
                      <input type='hidden' name='id_img' value='<?php echo $array2['id_img'] ?>'>
                      <input type='submit' value='' class="iconb" style="background-image: url('arquivos/apagar.png'); background-color: white; margin-top: 5px;border:none; background-repeat:no-repeat;background-size:20px 18px; background-color:none;">
                    </p>
                  </form>
                    </div>
                  </div>
               <?php };}; ?>
             </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2 class="heading-2">Faça um comentário</h2>
                <form action="comentaUsu.php" method="POST">
                  <div class="row form-group">
                    <div class="row form-group">
                    <div class="col-md-12">
                      <textarea name='coment' id="message" cols="30" rows="10" class="form-control" placeholder="Escreva aqui"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type='hidden' name='id_img' value='<?php echo $array2['id_img'] ?>'>
                    <input type='hidden' name='id_hist' value='<?php echo $array1['id_hist'] ?>'>
                    <input type="submit" value="Enviar" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
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
