<!DOCTYPE html>
<html>
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark " style="background-color: black;">
        <div class="container " >
            <a class="navbar-brand" href="index.php">
                <img src="img/ajuda-ai.png" alt="Logo Ajudai" height="35px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end text-white" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto" style="color:rgb(78, 112, 97);" >
                     <li class="nav-item mx-3">
                        <a class="nav-link" href="index.php">Página inicial</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="trabalhos.php">Todos trabalhos</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="contact.php">Entre em contato</a>
                    </li>
                </ul>
                <!--
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Procurar...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-number mr-4">
                                <i class="fa fa-search"></i>
                            </button> 
                        </div>
                    </div>
                </form>-->

                <?php
                    session_start();
                    if((isset ($_SESSION['login']) == false) and (isset ($_SESSION['senha']) == false))
                    {
                    ?>
                <div>
                    <a class="btn btn-primary mr-2" href="registro.php" role="button" style="background-color: rgb(78, 112, 97); border-color: rgb(53, 77, 66);">Cadastre-se</a>
                    <a class="btn btn-outline-primary mr-2" href="login.php" role="button" style="border-color: rgb(53, 77, 66); color:rgb(78, 112, 97);">Faça login</a>
                </div>
                    <?php
                    }
                    else{
                        echo "<div class='mr-2' style='color: rgb(78, 112, 97); border:1px; border-radius:.25rem; border-color:rgb(78, 112, 97);' >" . $_SESSION['login'] . "</div>";
                        echo "<a class='btn btn-primary mr-2' href='desconectar.php' role='button' style='background-color: rgb(78, 112, 97); border-color: rgb(53, 77, 66);'>Desconectar</a>";
                        ?>
                    <?php
                    }  
                ?>
                
            </div>
            
        </div>
    </nav>
</body>
</html>