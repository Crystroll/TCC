<?php
include "header.php";

/*
if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }*/
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
<style>
.login{
    display:block;
}

.cadastro{
    display:none;
}
</style>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-5">

                <div class="login">
                    <h2 class="text-center"> Faça seu Login </h2>
                        <form action="operador_login.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control " id="email" name="email" placeholder="Digite o e-mail">
                            </div>   
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                            </div>     
                            <div class="buttons">
                                <button class="btn btn-primary"> Acessar </button>
                                <button type="submit" class="btn btn-primary mt-3" name="login" value="Entrar">Entrar</button>
                            </div>
                        </form>  
                    <a href="#" class="text-center" id="cadastro">Faça seu cadastro</a> 
                </div>



            </div>
        </div>   
    </div>    
<script>
var cad = document.getElementById('cadastro');
var log = document.getElementById('login');
var login = document.querySelector('.login');
var cadastro = document.querySelector('.cadastro');


cad.addEventListener('click', function(){
console.log("Clique");
login.style.display="none";
cadastro.style.display="block";
})

log.addEventListener('click', function(){
    cadastro.style.display="none";
    login.style.display="block";
})
</script>    


    
</body>
</html>
