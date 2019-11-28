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
    $coment = $_POST['coment'];

    $sql = "insert into comentarios (comentario, id_user, id_hist) values ('$coment', '$id_user', '$id_hist')";
    mysqli_query($link, $sql);

    $sql4 = "select * from comentarios order by id_coment desc limit 1";
    $query4 = mysqli_query($link, $sql4);
    $array = mysqli_fetch_array($query4);
    $id_coment = $array['id_coment'];

    $sql1 = "insert into denuncia (id_coment) values ('$id_coment')";
    mysqli_query($link, $sql1);

    header("location: historiaAdm.php?id= $id_hist & id_user= $id_user  & id_img= $id_img");

?>
