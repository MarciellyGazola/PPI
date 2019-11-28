<?php
session_start();
include "conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$curso = $_POST['curso'];
$ano_formatura = $_POST['ano_formatura'];

if (isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['foto']['name'], -3));
    //substr pega os ultimos 4 caracteres do nome do arquivo
    //strtolower converte tudo pra minusculo
    $novo_nome = md5(time()).'.'.$extensao;
    //define o nome do arquivo
    $diretorio = "arquivo/";
    $img = $diretorio.$novo_nome;

    //define o diretorio para onde o arquivo é enviado.
    move_uploaded_file($_FILES['foto']['tmp_name'], $img);
    //efetua o uploa
    //deleta imagem antiga da pasta
    //echo 'imagem:'.$imagem;
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $id_user = $_SESSION['usuario'];

    $sql2 = "select * from usuario where cpf = '$cpf'";
    $result2 = mysqli_query($link, $sql2);

    if (mysqli_num_rows($result2) > 0 ) {
        $_SESSION['erros1']="Este cpf de usuario já foi utilizado";
        header("location: editarCadastroAdm.php");
    }else {

    $sql = "update usuario set nome = '$nome', cpf = '$cpf', senha = '$senha', curso = '$curso', ano_formatura = '$ano_formatura' where id_user= '$id_user'";
    $result = mysqli_query($link, $sql);

    $sql = "update img set endereco = '$img' where id_user = '$id_user'";
    $query = mysqli_query($link, $sql);

    if($array1['tipo'] == 1) {
      header('location: indexUsu.php');
    }elseif($array1['tipo'] == 2) {
      header('location: indexCont.php');
    }elseif($array1['tipo'] == 3) {
      header('location: indexAdm.php');
    }
}
mysqli_close($link);
?>
