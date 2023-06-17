<?php
include("models/conexao.php");
include("views/blades/header.php");
session_start();
?>
<style>
    <?php include '../css/style.css'; ?>
</style>
<div class="container" class="d-flex justify-content-center">
</div>
<div id="mainContent" class="text-center d-flex justify-content-center">
<div class="text-white">
</div>
</div>
    <div id="lista-noticias" class="mt-5" style="text-align: center;    ">
        <h1>Notícias</h1>
    </div>

    <div class="container p-3 mt-5 rounded-4 shadow-lg">    
    <table class="table table-bordered table-striped" width="800">
            <tr>
                <td><b>Imagens</b></td>
                <td><b>Posts</b></td>
            </tr>
            <?php
            $query = mysqli_query($conexao, "SELECT * from blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimgs on blog_blogimgs_codigo = blogimgs_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo");
            while ($exibe = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td class="text-center align-middle">
                        <a class="text-primary" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                            <img src="arquivos/<?php echo $exibe[11] ?>" width="150px">
                    </td>
                    <td class="align-middle p-3">
                        <a class="text-primary" href="views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                                <b><?php echo $exibe[5] ?></b>
                        </a>
                        <br>
                        <b> Criado por: </b>
                            <?php echo $exibe[12] ?>
                        </br>
                        <b> Data: </b>  
                        <?php echo $exibe[7] ?>
                        <hr style="border-width:3px; color:black">
                        <b><?php echo substr($exibe[6], 0, 70) . "..." ?></b>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php include("views/blades/footer.php"); ?>