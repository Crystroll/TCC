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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-info text-white bg-opacity-50"><i class="fa fa-envelope"></i> Insira as informaçoes do trabalho
                </div>
                <div class="card-body">
                    <form action="operador_adicionar_trabalho.php" method="post" name="form-cadastro" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nome_trabalho">Título do trabalho</label>
                            <input type="text" class="form-control" id="nome_trabalho" name="nome_trabalho" aria-describedby="emailHelp" placeholder="Ex. 'Pedro Pinturas'" required>
                        </div>
                        <div>
                            <label for="email">Descrição</label>
                            <textarea class="form-control" id="descricao_trabalho" name="descricao_trabalho" rows="6" placeholder="Digite sua mensagem aqui" required></textarea>
                        </div>
                        <div class="form-group">
                        <label for="tipo_trabalho">Tipo de serviço</label>
                            <select class="form-control" id="tipo_trabalho" name="tipo_trabalho">
                                <option value="1" >Pedreiro</option>
                                <option value="2">Encanador</option>
                                <option value="3">Eletricista</option>
                                <option value="4">Designer de interiores</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imagem">Thumbnail</label> <br/>
                            <input style="display: none;" onchange="previewFile()" id="imagem-thumb" type="file" name="imagem" /> <br />
                            <img style=" cursor: pointer; height: 200px; width: 200px;" src="../TCC/images_products/default.png" id="previewImg">
                        </div>
                        <div class="mx-auto">
                            <button type="submit" name="submit" class="btn btn-primary text-right">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
        function previewFile(input){
            var file = $("#imagem-thumb").get(0).files[0];
    
            if(file){
                var reader = new FileReader();
    
                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }
    
                reader.readAsDataURL(file);
            }
        }

        $("#previewImg").click(function(){
            $('#imagem-thumb').trigger('click');
        })
    </script>

</body>
</html>
<?php
include "footer.html";
?>