<?php

	$conexao = new mysqli("localhost", "root", "", "exphp"); 
	
	$id_excluir = $_POST['id_excluir'];
	
	$sql = "DELETE FROM usuarios WHERE id = ".$id_excluir.";";
	$resultado = $conexao->query($sql);
	
	$qtExclusao = mysqli_affected_rows($conexao);
	
	if($qtExclusao > 0) {
		echo "Usuário excluído com sucesso!";
	} else {
		echo "Usuario não encontrado!";
	}
?>
<br><a href="../index.html">Voltar</a>