<!DOCTYPE html>
<html>
<head>
    <?php include "header.html" ?>
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
 

    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</section>
</body>
</html>
<?php include "footer.html" ?>