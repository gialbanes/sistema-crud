<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='../index.php';</script>";
}
include("../models/conexao.php");
include("../views/blades/header.php");
?>
<style>
    <?php include '../css/style.css'; ?>
</style>

<div class="container p-5 mt-5 rounded text-black " id="post">
    <h1 class="fw-bold">Bem vindo
        <?php echo $_SESSION["usuario"] ?>
</h1>
    <hr class="border border-dark border-2 opacity-75">
    <br>
    <h3 class="fw-bold">Criar notícia</h3>
    <form name="criarNoticia" action="../controllers/cadastrar.php" enctype="multipart/form-data" method="post">

        <label class="form-label lbl-input mt-4 text-dark">Escolher Usuário:</label>
        <select id="postagemUsuario" name="postagemUsuarioCodigo" required="postagemUsuario" class="form-select">
            <?php
            $res = mysqli_query($conexao, "SELECT * FROM usuario");
            while ($row = mysqli_fetch_array($res)) {
                $usuarioCodigo = $row['usuario_codigo'];
                $co_name = $row['usuario_nome'];
                ?>
                <option value="<?php echo $usuarioCodigo; ?>"><?php echo $co_name; ?></option>
            <?php } ?>
        </select>


        <br>
        <label class="form-label lbl-input mt-2 text-darkl">Título:</label>
        <input class="form-control" type="text" name="noticiaTitulo">

        <label class="form-label lbl-input mt-4 text-dark">Notícia:</label>
        <textarea class="form-control" type="text" name="noticiaCorpo"></textarea>
        <br>
        <label class="form-label lbl-input mt-2 text-dark">Data:</label>
        <input class="form-control" type="date" name="noticiaData">
        <br>
        <hr>

        <label class="form-label mt-3 text-dark">Selecione a imagem da notícia:</label><br>

        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
            <input type="file" name="arquivo[]" multiple="multiple" />

        </div>
        <input class="btn btn-primary mt-5" type="submit" value="Criar Postagem">
        </div>
    </form>

<br><br><br>
<hr class="border border-dark border-2 opacity-75">
<br><br>
<div class="pct container">
<h3 class="fw-bold text-dark">Gerenciar notícias</h3>
<table
    class="table table table-rounded border-secondary-emphasis table-striped table-hover shadow mt-5" id="tabela">
    <tr>
        <td class="fw-bold">Imagens</td>
        <td class="fw-bold">Postagens</td>
        <td class="fw-bold">Editar</td>
        <td class="fw-bold">Excluir</td>
    </tr>
    <?php
    $query = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo");
    while ($exibe = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td class="text-center align-middle"><img src="../arquivos/<?php echo $exibe[11] ?>" width="100px"></td>
            <td class="align-middle p-3">
                <h3>
                    <?php echo $exibe[5] ?>
                </h3>
                <b> Criado por: </b>
                    <?php echo $exibe[13] ?>
                <br>
                <b> Data: </b>  
                <?php echo $exibe[7] ?>
                <hr>
                <?php echo wordwrap($exibe[6], 20, "<br/> ", true) ?>
            </td>
            <td class="text-center align-middle">
                <a class="btn btn-primary d-grid" href="cadastroAtualiza.php?bloginfo_codigo=<?php echo $exibe[0] ?>">Editar</a>
            </td>
            <td class="text-center align-middle">
                <a class="btn btn-danger d-grid"
                    href="../controllers/deletar.php?bloginfo_codigo=<?php echo $exibe[0] ?>&amp;imagemNome=<?php echo $exibe[6] ?>&amp;noticiaInfoCodigo=<?php echo $exibe[2] ?>">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
</div>
<?php include("../views/blades/footer.php"); ?>