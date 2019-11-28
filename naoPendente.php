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
$sql = "update historias set estado = 1 where id_hist='$id'";
$result = mysqli_query($link, $sql);
header("location: pendentes.php");
mysqli_close($link);
?>
