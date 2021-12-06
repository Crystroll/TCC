<?php 
	// session_start inicia a sessão
	session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior

	$timestamp = new DateTime();
	$mdTimestamp = md5($timestamp -> format('Y-m-d H:i:s'));
	
	$servico = $_POST['nome_trabalho'];
	$descricao =$_POST['descricao_trabalho'];
    $tipo_servico = $_POST['tipo_trabalho'];
	$Id_servico = $_POST['Id'];
	$id_usuario = $_POST['id_usuario'];
	// as próximas 3 linhas são responsáveis em se conectar com o banco de dados.
	$servidor = "localhost";
	$usuario = "root";
	$senhaDb = "";
	$dbname = "site-ajudai";
	// tratamento imagem
	$target_dir = "../TCC/images_products/";
	$path_ext = pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION);
	$target_file = $target_dir . "$mdTimestamp." . $path_ext;


	move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

	//criar conexao
	$conn = mysqli_connect ($servidor, $usuario, $senhaDb, $dbname);
	 


	$sql="insert into trabalho(nome, descricao, tipo_servico, Id_usuario, thumb) values('$servico', '$descricao', '$tipo_servico','$Id_servico', '$target_file')";
	$result=mysqli_query($conn,$sql);



	/* 
	$sql2="insert into tipo-servico(nome, descricao, area, caminho_imagem) values('$tipo_servico', '$tipo_servico', '$tipo_servico', '$tipo_servico')";
	$result2=mysqli_query($conn,$sql2);
	*/


	mysqli_close($conn);

    header('location:trabalhos.php');
	  //ESTA PÁGINA PODE SER CONSIDERADA COMO UM OPERADOR QUE FAZ TROCA DE INFORMAÇÕES COM O BANCO DE DADOS, PARA PODER INICIAR UMA SESSÃO
/*

	  function listaProdutos($conn) {    
		$produtos = array();
		$resultado = mysqli_query($conn, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
	
		while($produto_array = mysqli_fetch_assoc($resultado)) {
		  $categoria = new Categoria();
		  $categoria->nome = $produto_array['categoria_nome'];
	
		  $produto = new Produto();
		  $produto->nome = $produto_array['nome'];
		  $produto->preco = $produto_array['preco'];
		  $produto->descricao = $produto_array['descricao'];
		  $produto->usado = $produto_array['usado'];
		  $produto->categoria = $categoria->nome;
	
		  array_push($produtos, $produto);            
		}    
		return $produtos;
	}
*/
?>