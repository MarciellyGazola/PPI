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
    $id_user = $_SESSION['usuario'];
    $id_img = $_POST['id_img'];
    $id_hist = $_POST['id_hist'];
    $id_coment = $_POST['come'];
    $data = date('Y-m-d h:i:s');

    $sql = "insert into denuncia (id_user, id_coment, data_) values ('$id_user','$id_coment','$data')";
    mysqli_query($link, $sql);

    header("location: historiaAdm.php?id= $id_hist & id_user= $id_user & id_img= $id_img");
?>
