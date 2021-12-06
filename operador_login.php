<?php 
	// session_start inicia a sessão
	//session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior

	$login = $_POST['email'];
	$code = md5($_POST['password']);


	$query_id="select Id from usuario where email = '$login' and senha = '$code'";
	$result_trabalho=mysqli_query($conn,$query_id);
	while($row = mysqli_fetch_assoc($result_trabalho)){
		$_SESSION['id_usuario'] = $row['Id'];
    }
	
	
	// as próximas 3 linhas são responsáveis em se conectar com o banco de dados.
	$servidor = "localhost";
	$usuario = "root";
	$senhaDb = "";
	$dbname = "site-ajudai";
	
	//criar conexao
	$conn = mysqli_connect ($servidor, $usuario, $senhaDb, $dbname);
	 
	// A variavel $result pega as varias $login e $senha, faz uma 
	//pesquisa na tabela de usuarios

	$sql="select * from usuario where email = '$login' and senha = '$code'";

	$result=mysqli_query($conn,$sql);
	  
	$rowcount=mysqli_num_rows($result);
	
	if($rowcount > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:index.php');
	}else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:login.php');
	}
	  

	mysqli_close($conn);
	  //ESTA PÁGINA PODE SER CONSIDERADA COMO UM OPERADOR QUE FAZ TROCA DE INFORMAÇÕES COM O BANCO DE DADOS, PARA PODER INICIAR UMA SESSÃO
?>
