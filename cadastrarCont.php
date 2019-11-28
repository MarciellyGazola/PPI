<?php
   session_start();
  include "conexao.php";
  unset($_SESSION['erros1']);

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $cpf = $_POST['cpf'];
  $curso = $_POST['curso'];
  $ano_formatura = $_POST['ano_formatura'];

  if((!$nome) or (!$senha) or (!$cpf) or (!$curso) or (!$ano_formatura)){
	header('location: cadastro.php');
  	exit();
  }

  $sql2 = "select * from usuario where cpf = '$cpf'";

  $result2 = mysqli_query($link, $sql2);

  echo mysqli_num_rows($result2);
  if (mysqli_num_rows($result2) > 0 ) {

  	$_SESSION['erros1']="Este cpf de usuario já foi utilizado";
  	header("location: cadastro.php");
  }else {

  $sql = "insert into usuario (nome, senha, cpf, curso, ano_formatura,tipo) VALUES ('$nome', '$senha', '$cpf', '$curso', '$ano_formatura', 2)";
  $result = mysqli_query($link, $sql);


  $sql5 = "select * from usuario order by id_user desc limit 1";
  $query5 = mysqli_query($link, $sql5);
  $array1 = mysqli_fetch_array($query5);
  $id_user = $array1['id_user'];
  $sql2 = "insert into img (endereco, id_user) VALUES ('arquivos/user.ico','$id_user')";
  $result = mysqli_query($link, $sql2);

  $sql3 = "select * from usuario where cpf = '$cpf'";
  $result3 = mysqli_query($link, $sql3);
  header('location: indexCont.php'); // página inicial do cont


  }
  mysqli_close($link);

?>
