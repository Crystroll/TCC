<?php 
	// session_start inicia a sessão
	//session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior

	$servico = $_POST['nome'];
	$descricao =$_POST['senha'];
    $tipo_servico = $_POST['telefone'];
	$Id_usuario = $_POST['email'];

	// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.


	$servidor = "localhost";
	$usuario = "root";
	$senhaDb = "";
	$dbname = "site-ajudai";
	
	//criar conexao
	$conn = mysqli_connect ($servidor, $usuario, $senhaDb, $dbname);
	 


	$sql="insert into trabalho(nome, descricao, tipo_servico, Id_usuario) values('$login', '$password', '$phone', '$email')";

	$result=mysqli_query($conn,$sql);
	  

	mysqli_close($conn);

    header('location:login.php');
	  //ESTA PÁGINA PODE SER CONSIDERADA COMO UM OPERADOR QUE FAZ TROCA DE INFORMAÇÕES COM O BANCO DE DADOS, PARA PODER INICIAR UMA SESSÃO
?>
