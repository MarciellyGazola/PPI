<?php

include "conexao.php";

$id = $_POST['id'];
$titulo  = $_POST['titulo'];
$pub = $_POST['pub'];
$data = date('Y-m-d h:i:s');

if (isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()). "." . $extensao;
    $diretorio = "arquivos/";
    $foto = $diretorio.$novo_nome;

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql5 = "select * from usuario order by id_user desc limit 1";
    $query5 = mysqli_query($link, $sql5);
    $array1 = mysqli_fetch_array($query5);
    $id_user = $array1['id_user'];

    $sql2 = "insert into historias (dataa, titulo, historia, id_user, estado) values ('$data', '$titulo', '$pub', '$id_user', 0)";
    $query2 = mysqli_query($link, $sql2);

    $sql4 = "select * from historias order by id_hist desc limit 1";
    $query4 = mysqli_query($link, $sql4);
    $array = mysqli_fetch_array($query4);
    $id_hist = $array['id_hist'];

    $sql = "insert into img(endereco, id_hist) values ('$foto', '$id_hist')";
    $query = mysqli_query($link, $sql);

    if($query2) {
        echo "Registro inserido com sucesso";
        header('location: indexCont.php');
    }else {
        echo "Erro ao inserir registro." . mysqli_error($link);
    }
}else {
    $sql5 = "select * from usuario order by id_user desc limit 1";
    $query5 = mysqli_query($link, $sql5);
    $array1 = mysqli_fetch_array($query5);
    $id_user = $array1['id_user'];

    $sql3 = "insert into historias (dataa, titulo, historia, id_user, estado) values ('$data', '$titulo', '$pub', '$id_user', 0)";
    $query3 = mysqli_query($link, $sql3);

    if($query3) {
        echo "Registro inserido com sucesso";
        header('location: indexCont.php');
    }else {
        echo "Erro ao inserir registro." . mysqli_error($link);
    }
}
mysqli_close($link);
?>
