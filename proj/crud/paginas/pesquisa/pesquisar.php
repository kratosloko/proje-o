<?php

	$conexao = new mysqli("localhost", "root", "", "exphp"); 
	
	$nome = $_POST['nome'];
	
	$sql = "SELECT * FROM usuarios WHERE nome LIKE '%".$nome."%';";
	
	$resultado = $conexao->query($sql);

	$qtRegistros = mysqli_num_rows($resultado);
	
	if($qtRegistros > 0) {
		echo $qtRegistros . " registros encontrados";
		
		while($registro = mysqli_fetch_assoc($resultado)) {
			echo "<br>";
			echo "<br>Id:" . $registro["id"];
			echo "<br>Nome:" . $registro["nome"];
			echo "<br>E-mail:" . $registro["email"];
			echo "<br>Senha:" . $registro["senha"];
		}
	} else {
		echo "Nenhum registro não encontrado.";
	}
?>
<br><a href="../index.html">Voltar</a>