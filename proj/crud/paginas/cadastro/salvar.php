<?php

	$conexao = new mysqli("localhost", "root", "", "exphp"); 
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO usuarios(nome, email, senha) VALUES('".$nome."','".$email."','".$senha."');";
	$resultado = $conexao->query($sql);
	
	if($resultado) {
		echo "Usuário cadastrado com sucesso!";
	}
?>
<br><a href="../index.html">Voltar</a>