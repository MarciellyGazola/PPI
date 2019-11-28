<?php
session_start();
include "conexao.php";

if(!$_SESSION['usuario']){
    header("location:login.php");
}else{
    if($_SESSION['tipo'] != 2 and $_SESSION['tipo'] != 3){
        header("location:login.php");
    }
}

$id_hist = $_POST['id_hist'];
$id_img = $_POST['id_img'];

$sql1 = "delete from likar where id_hist = $id_hist";
mysqli_query($link, $sql1);

$sql2 = "select * from comentarios where id_hist = '$id_hist'";
$result1 = mysqli_query($link, $sql2);
$result2 = mysqli_fetch_array($result1);


foreach($result1 as $post) {
  $sql = "delete from denuncia where id_coment = ".$post['id_coment'];
  mysqli_query($link, $sql);

};

$sql3 = "delete from comentarios where id_hist = $id_hist";
mysqli_query($link, $sql3);

$sql5 = "delete from img where id_hist = $id_hist";
mysqli_query($link, $sql5);

$sql4 = "delete from historias where id_hist = $id_hist";
mysqli_query($link, $sql4);

  header("location: indexAdm.php");

?>
