<?php
include "header.php";
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pedro Pinturas</title>
</head>

<body>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Pintura Comercial e Residencial</h1>
        <p class="lead text-muted mb-0">Precisando de uma reforma ou retoque na sua residência? Trabalho rápido e completo, total garantia!</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="trabalhos.php">Categoria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pintura</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div id="myCarousel" class="col-12 col-lg-6 carousel slide ml-auto mr-auto"  data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/paint1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/paint2.jfif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/paint3.jfif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
</div>
        <!-- Image 
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body">
                        <img class="img-fluid" src=""/>
                </div>
            </div>
        </div>-->

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <form method="get" action="cart.html">
                        <div class="form-group">
                            <label for="colors">Planos</label>
                            <select class="custom-select" id="colors">
                                <option selected>Selecionar</option>
                                <option value="1">Plano Residencial</option>
                                <option value="2">Plano Comercial</option>
                                <option value="3">Plano Industrial</option>
                            </select>
                        </div>
                        <!--<div class="form-group">
                            <label>Quantidade :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>-->
                        <a href="cart.html" class="btn btn-success btn-lg btn-block text-uppercase">
                            <i class="fa fa-phone"></i> Entrar em Contato
                        </a>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Resposta Rapída</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pagamento Seguro</li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>(99) 99999-9999</li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        2 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (5/5)
                        <a class="pull-right" href="#reviews">Ver Todas as Reviews</a>
                    </div>
                    <!--<div class="datasheet p-3 mb-2 bg-info text-white">
                        <a href="" class="text-white"><i class="fa fa-file-text"></i> Baixar DataSheet</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Descrição</div>
                <div class="card-body">
                    <p class="card-text">
                        Oferecendo serviços de pintura geral para residências ( Casas, Apartamentos e Kitnets ), também faço serviços para empresas e comércio no geral.
                    </p>
                    <p class="card-text">
                        Trabalhamos com pacotes de planos, com uma grande variedade de serviços para suprir grandes demandas em serviços de pequenas ou grandes escalas.
                    </p>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <div class="col-12" id="reviews">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-comment"></i> Reviews</div>
                <div class="card-body">
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016"> <?php echo strftime('%d de %B, %Y', strtotime('today'));?>
                        
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        Por Ana Júlia
                        <p class="blockquote">
                            <p class="mb-0">Serviço rápido e de boa qualidade. Gostei!</p>
                        </p>
                        <hr>
                    </div>
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016"> <?php echo strftime('%d de %B, %Y', strtotime('today'));?>

                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        Por João Pereira
                        <p class="blockquote">
                            <p class="mb-0">Os resultados foram incríveis!</p>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    //Plus & Minus for Quantity product
    $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
</body>
</html>
<!-- Footer -->
<?php
include "footer.html";
?>
