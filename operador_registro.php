<?php 
	// session_start inicia a sessão
	//session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior

	$login = $_POST['nome'];
	$password = md5($_POST['password']);
    $phone = $_POST['telefone'];
	$email = $_POST['email'];

	// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.


	$servidor = "localhost";
	$usuario = "root";
	$senhaDb = "";
	$dbname = "site-ajudai";
	
	//criar conexao
	$conn = mysqli_connect ($servidor, $usuario, $senhaDb, $dbname);
	 


	$sql="insert into usuario(nome, senha, telefone, email) values('$login', '$password', '$phone', '$email')";

	$result=mysqli_query($conn,$sql);
	  

	mysqli_close($conn);

    header('location:login.php');
	  //ESTA PÁGINA PODE SER CONSIDERADA COMO UM OPERADOR QUE FAZ TROCA DE INFORMAÇÕES COM O BANCO DE DADOS, PARA PODER INICIAR UMA SESSÃO
?>
