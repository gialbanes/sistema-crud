<?php
include("../models/conexao.php");

$diretorio = "../arquivos/";
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
$destino = $diretorio . "/" . $arquivo['name'][0];
$extension = pathinfo($destino, PATHINFO_EXTENSION);
$img = $arquivo['name'][0];
$imgRandom = md5(uniqid($img)) . "." . $extension;

if ($extension == "png") {
    move_uploaded_file($arquivo['tmp_name'][0], $diretorio . "/" . $imgRandom);
} else {
    exit("Arquivo não é compatível");
}

mysqli_query($conexao, "INSERT INTO blogimgs(blogimgs_nome, blogimgs_random) VALUES ('$img', '$imgRandom')");

$id_img = mysqli_insert_id($conexao);




$PostagemUsuarioCodigo = $_POST["postagemUsuarioCodigo"];

$NoticiaTitulo = $_POST["noticiaTitulo"];
$NoticiaCorpo = $_POST["noticiaCorpo"];
$NoticiaData = strtotime($_POST["noticiaData"]);
$NoticiaData = date('Y-m-d H:i:s', $NoticiaData);

mysqli_query($conexao, "INSERT INTO bloginfo (bloginfo_titulo, bloginfo_corpo, bloginfo_data) VALUES ('$NoticiaTitulo', '$NoticiaCorpo', '$NoticiaData');");

$id_info = mysqli_insert_id($conexao);


mysqli_query($conexao, "INSERT INTO blog (blog_blogimgs_codigo, blog_bloginfo_codigo, blog_usuario_codigo) 
VALUES ('$id_img', '$id_info' , '$PostagemUsuarioCodigo');");

header("location:../index.php");

?>