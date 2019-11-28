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

    $id_hist = $_POST['id_hist'];
    $id_img = $_POST['id_img'];
    $id_user = $_SESSION['usuario'];

    $sql = "select * from likar where id_user = '$id_user'";
    $query = mysqli_query($link, $sql);
    $likes = mysqli_num_rows($query);
    echo $likes;
    if($likes == 0) {
       $sql2 = "insert into likar (id_user, id_hist) values ('$id_user', '$id_hist')";
       mysqli_query($link, $sql2);
       header("location: historiaAdm.php?id= $id_hist & id_user= $id_user  & id_img= $id_img");
    } else {
      $sql3 = "delete from likar where id_hist = '$id_hist' and id_user = '$id_user'";
      mysqli_query($link, $sql3);
      header("location: historiaAdm.php?id= $id_hist & id_user= $id_user  & id_img= $id_img");
    }

    header("location: historiaAdm.php?id= $id_hist & id_user= $id_user  & id_img= $id_img");
?>
