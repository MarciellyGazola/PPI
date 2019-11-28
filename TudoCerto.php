<?php
    session_start();
    include "conexao.php";

    if(!$_SESSION['usuario']){
        header("location:login.php");
    }else{
        if($_SESSION['tipo'] != 2 and $_SESSION['tipo'] != 3 and $_SESSION['tipo'] != 1){
            header("location:login.php");
        }
    }
    $id_coment = $_POST['come'];

    $sql = "delete from denuncia where id_coment = $id_coment";
    $nsei1 = mysqli_query($link, $sql);
    $nsei = mysqli_fetch_array($nsei1);

    header('location: denunciaAdm.php');// página inicial do adm

?>
