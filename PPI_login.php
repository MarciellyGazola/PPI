<?php
include "conexao.php";
session_start();
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

if(empty($cpf) or empty($senha)) {
   $_SESSION['erros'] = "Campos não podem ser nulos!";
	 header('location:login.php');
	 exit();
}else {
	 $cpf = mysqli_real_escape_string($link,$cpf);
	 $senha = mysqli_real_escape_string($link, $senha);

	 $query = "select * from usuario where cpf='{$cpf}' and senha = '{$senha}'";

	 $result = mysqli_query($link, $query);
	 $user = mysqli_fetch_array($result);
	 $row = mysqli_num_rows($result);
   if($row == 1){
	    $_SESSION['usuario'] = $user['id_user'];
			$_SESSION['tipo'] = $user['tipo'];
			if($_SESSION['tipo'] == 1 ){
				 header('location: indexUsu.php'); // página inicial do usu
			}else if($_SESSION['tipo'] == 2){
				 header('location: indexCont.php');// página incial do cont
			}else if($_SESSION['tipo'] == 3){
    	   header('location: indexAdm.php');// página inicial do adm
	    }
   }else{
		  $_SESSION['erros'] ="Usuario ou senha incorretos!";
	    header('location: login.php');
   }
}
mysqli_close($link);
?>
