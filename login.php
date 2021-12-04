<?php 
 include "header.php";
    if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
    {
      header('location:index.php');
      }
      //CHECAR SE O USUARIO JA TEM UMA SESSÃO EM ANDAMENTO
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Faça login</h1>
        <p class="lead text-muted mb-0">Entre com sua conta. Caso não esteja cadastrado, <a href="registro.php">clique aqui</a> </p>
    </div>
    </section>

    <div class="text-center">
        <form action="operador_login.php" method="post" name="login-form">
            <label for="email" class="row justify-content-center">Email</label>
            <input type="text" name="email" class='mb-2'/>
            <label for="password" class="row justify-content-center">Senha</label>
            <input type="password" name="password"/>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mt-3" name="login" value="Entrar">Entrar</button>
        </div>
        </form>
    </div>




</body>
</html>
