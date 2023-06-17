
<?php
include("../models/conexao.php");

$varIdPost = $_GET["bloginfo_codigo"];

$dados = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo WHERE blog_codigo = $varIdPost;");

$result = mysqli_fetch_array($dados);

$path = '../arquivos/'.$result['blogimgs_random'];
unlink($path);

mysqli_query($conexao, "DELETE FROM blog where blog_codigo = $varIdPost ");
echo $result['blogimgs_random'];



header("location:../index.php"); //voltar pra index


?>
