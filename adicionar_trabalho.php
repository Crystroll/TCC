<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

</head>
<body>
    <form action="operador_registro.php" method="post" name="form-cadastro">
        <label for="nome">Nome</label>
        <input type="text" name="nome"/>
        <label for="senha">Senha</label>
        <input type="password" name="senha" />
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone"/>
        <label for="email">Email</label>
        <input type="email" name="email"/>
        <input type="submit" value="Cadastrar" name="Cadastro">


        <input type="hidden" name="Id_usuario" value="<?php	$_SESSION['id_usuario']  ?>">


    </form>
</body>
</html>