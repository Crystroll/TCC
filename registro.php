<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-5">

                <div class="cadastro">
                    <h2 class="text-center"> Realize Seu Cadastro </h2>

                    <form action="operador_registro.php" method="post" name="form-cadastro">
                        <div class="my-4">
                            <label for="email" class="form-label">Nome</label>
                            <input type="text" class="form-control " id="nome" name="nome" placeholder="Digite o seu nome">
                        </div>   
                        <div class="my-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control " id="email" name="email" placeholder="Digite o e-mail">
                        </div>   
                        <div class="my-4">
                            <label for="email" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone"  id="telefone" placeholder="Digite o e-mail">
                        </div>   
                        <div class="my-4">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                        </div>     
                        <div class="buttons my-2" >
                            <button class="btn btn-primary"> Cadastrar </button>
                        </div>
                    </form>  
                    Já possui conta? <a href="login.php" class="text-center" id="login">Faça login</a> 

                    <br /><br /><br /><br /><br /><br />
                </div>
            </div>
        </div>
    </div>


</body>
</html>

<?php
include "footer.html";
?>