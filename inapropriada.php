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
$id = $_POST['id'];
$sql1 = "select * from img where id_hist = '$id'";
$result = mysqli_query($conectar, $sql1);
$row = mysqli_num_rows($result);
if ($row != 0) {
$sql = "delete from img where id_hist = '$id'";
$sql2 = "delete from historias where id_hist = '$id'";
mysqli_query($link, $sql);
mysqli_query($link, $sql2);
}else{
  $sql = "delete from historias where id_hist = '$id'";
  mysqli_query($link, $sql);
}
header("location: pendentes.php");
mysqli_close($link);
?>
