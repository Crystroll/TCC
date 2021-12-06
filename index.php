<?php
include "header.php";

$servidor = "localhost";
$usuario = "root";
$senhaDb = "";
$dbname = "site-ajudai";

//criar conexao
$conn = mysqli_connect ($servidor, $usuario, $senhaDb, $dbname);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Início - Ajudai</title>
</head>

<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Bem-vindo ao Ajuda Aí!</h1>
        <p class="lead text-muted mb-0">O Ajudaí! é a ferramenta perfeita para que você encontre a solução para trabalhos do dia-a-dia que precisam de uma mãozinha qualificada!</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./img/slide1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/slide2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/slide3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Proximo</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header text-white text-uppercase" style="background-color:rgb(241, 181, 42);" >
                    <i class="fa fa-star"></i> Últimos Serviços
                </div>
                <div class="card-body">
                    <div class="row">
                        
                    
                    <?php
$result = mysqli_query($conn,"SELECT * FROM trabalho");
while($row = mysqli_fetch_array($result))
{
?>
   <!--Cartão do trabalho-->
   <div class="col-12 col-md-6 col-lg-4 py-2">
                    <div id="cartao" class="card" style="height: 400px">
                    <img style="height: 200px;" class="card-img-top" src="<?php echo $row['thumb'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product"><?php echo $row['nome']; ?></a></h4>
                            <p class="card-text"><?php echo $row['descricao'];?></p>
                            <div class="row">
                                <div class="col">
                                    <a href="product.php" class="btn btn-success btn-block float-end" style="vertical align-bottom">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- FIM cartão do trabalho-->
    <?php
}
mysqli_close($conn);
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.html";
?>

<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>