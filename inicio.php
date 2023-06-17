<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="upload" enctype="multipart/form-data" method="post" action="controllers/cadastrar.php"> <!--atributo obrigatorio p indicar op tipo de post que sera trabalhado no form - enctype-->
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999"> <!--p definir o tamanho do upload - value -->
        <input type="file" name="arquivo[]" multiple="multiple" /> <!--seleção de vários arquivos ao mesmo tempo - multiple--> <!--p fazer o array dos arquivos - colchetes-->
        <input name="enviar" type="submit" value="Enviar">
</form>
    
</body>
</html>

<!-- 
pathinfo
md5()
uniqid()
 -->

<!--vai p upload -->