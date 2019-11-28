<?php
    session_start();
    include "conexao.php";

    if(!$_SESSION['usuario']){
        header("location:login.php");
    }else{
        if($_SESSION['tipo'] != 1 and $_SESSION['tipo'] != 2 and $_SESSION['tipo'] != 3){
            header("location:login.php");
        }
    }

    $id_coment = $_POST['come'];

    $sql3 = "delete from denuncia where id_coment = $id_coment";
    mysqli_query($link, $sql3);

    $sql = "delete from comentarios where id_coment = $id_coment";
    mysqli_query($link, $sql);
    if ($_SESSION['tipo'] == 1){
      header('location: indexUsu.php');
    }else if($_SESSION['tipo'] == 2){
       header('location: indexCont.php');// página incial do cont
    }else if($_SESSION['tipo'] == 3){
       header('location: indexAdm.php');// página inicial do adm
    }
    mysqli_close($link);
?>
