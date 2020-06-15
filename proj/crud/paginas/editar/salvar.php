<?php

	$conexao = new mysqli("localhost", "root", "", "exphp"); 
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$id_atualizar = $_POST['id_atualizar'];
	
	$sql = "UPDATE usuarios SET nome = '".$nome."', email = '".$email."', senha='".$senha."' WHERE id = ".$id_atualizar.";";
	$resultado = $conexao->query($sql);
	
	if($resultado) {
		echo "Usuário atualizado com sucesso!";
	}
?>
<br><a href="../index.html">Voltar</a>