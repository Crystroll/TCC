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
    <title>Trabalhos Ajudaí!</title>
</head>

<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Trabalhos</h1>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="trabalhos.php">Categorias</a></li>
                    <!--<li class="breadcrumb-item active" aria-current="page">Sub-Categoria</li>-->
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <!--Coluna CATEGORIAS e ADICIONE SEU TRABALHO-->
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categorias</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="trabalhos.php">Pedreiro</a></li>
                    <li class="list-group-item"><a href="trabalhos.php">Encanador</a></li>
                    <li class="list-group-item"><a href="trabalhos.php">Eletricista</a></li>
                    <li class="list-group-item"><a href="trabalhos.php">Designer de interiores</a></li>
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-plus mr-1"></i><a href="adicionar_trabalho.php" class="text-white"> Adicione seu trabalho</div>
            </div>
        </div>

    <!--Coluna dos trabalhos-->
        <div class="col">
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
                                    <a href="product.php" class="btn btn-success btn-block float-end">Ver mais</a>
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
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
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
