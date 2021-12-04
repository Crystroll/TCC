<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

</head>
<body>
    <form action="operador_adicionar_trabalho.php" method="post" name="form-cadastro">
        <label for="nome_trabalho">Nome do trabalho</label>
        <input type="text" name="nome_trabalho"/>
        <label for="descricao_trabalho">Descrição</label>
        <input type="text" name="descricao_trabalho" />
        <label for="tipo_trabalho">Tipo de serviço</label>
        <input type="text" name="tipo_trabalho"/>
        <input type="submit" value="inserir" name="inserir">

        <input type="hidden" name="Id_usuario" value="<?php	$_SESSION['id_usuario']?>">


    </form>
</body>
</html>