<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dados Sabesp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
</head>
<body>

<?php
$nomeDigitado = $_GET['nome'];
$descricaoDigitado = $_GET['descricao'];
$valorDigitado = $_GET['valor'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdTeste"; // acessando o banco

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Insere valores na tabela
 $sql = "INSERT INTO itens (nome, descricao, valor) 
 VALUES ('$nomeDigitado', '$descricaoDigitado', '$valorDigitado')";
 
 if (mysqli_query($conexao, $sql)) {
	 echo "Registro criado com sucesso!<br>";
 }elseif(empty ($nomeDigitado)){
	echo "Favor preencher o campo nome!";
} elseif(empty ($descricaoDigitado)){
	echo "Favor preencher o campo descrição!";
}elseif(empty ($valorDigitado)){
	echo "Favor preencher o campo valor!";	
}else {
	 echo "Erro na criação do registro: " . mysqli_error($conexao);
 }
 
 mysqli_close($conexao);
 ?>
	<!-- Buscar os produtos cadastrados no banco --> 
<div class="botaoPesquisarBanco">
   	<form action="selectBanco.php">
		<button type="submit" class="btn btn-info">Buscar Todos os Produtos no Banco</button>
	</form> 
</div>

<div class="botaoVoltar">
    <form action="index.html">
        <button type="submit" class="btn btn-info">Voltar</button>
    </form>    
</div>
	
	</body>
</html>
