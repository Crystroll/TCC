<?php
include "header.html";
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
    <div>
        <form action="operador_login.php" method="post" name="login-form">
            <label for="email">Email</label>
            <input type="text" name="email" />
            <label for="password">Senha</label>
            <input type="password" name="password" />
            <input type="submit" name="login" value="Entrar" />
        </form>
    </div>
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
    
</body>
</html>
<?php
include "footer.html";
?>