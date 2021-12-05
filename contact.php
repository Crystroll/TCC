<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Fale Conosco</title>
</head>

<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">FALE CONOSCO</h1>
        <p class="lead text-muted mb-0">Diga nos qual é a sua dúvida</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Fale Conosco.
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Coloque seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Coloque seu Email" required>
                            <small id="emailHelp" class="form-text text-muted">Nunca divulgaremos seu Email com outros.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="6" placeholder="Digite sua mensagem aqui" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase pr-2"><i class="fa fa-info mr-2"></i>Informações</div>
                <div class="card-body">
                    <p>Porto Ferreira</p>
                    <p>São Paulo</p>
                    <p>ETEC Professor Jadyr Salles</p>
                    <p>Email: ajudaai.project@gmail.com</p>


                </div>

            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include "footer.html";
?>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
