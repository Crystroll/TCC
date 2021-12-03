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
        <p class="lead text-muted mb-0">Entre com sua conta. Caso não esteja cadastrado, <a href="registro.html">clique aqui</a> </p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <label for="email" class="form-label">Email:</label>
                
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
        </div>
        </div>
    <div>
            <form action="operador_login.php" method="post" name="login-form">
            <label for="email" >Email</label>
            <input type="text" name="email" />

            <label for="password">Senha</label>
            <input type="password" name="password" />

            
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" name="login" value="Entrar">Entrar</button>
        </div>
        </form>
    </div>
<<<<<<< Updated upstream
    <a href="registro.html">Cadastrar</a>  
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
    
=======
 

</section>
>>>>>>> Stashed changes
</body>
</html>
<?php include "footer.html" ?>