<?php
	$servidor = "localhost"; // Nome do servidor
	$usuario = "root"; // Usuário do servidor
	$senha = "root"; // Senha do usuário
	$dbname = "database"; // Nome do banco de dados que vai se conectar
	
	// Variável $conn recebe a conexão com o servidor MySQL. 
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>