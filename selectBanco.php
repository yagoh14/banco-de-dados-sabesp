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

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdTeste"; // acessando o banco

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Busca e mostra os itens cadastrados
$sql = "SELECT id, nome, descricao, valor FROM itens";

// salva o resultado da consulta 
$resultado = mysqli_query($conexao, $sql);

// verifica se o comando retornou uma ou mais linhas
if (mysqli_num_rows($resultado) > 0) {
    // mostra os dados de cada linha retornada
	echo "<table>";
    while($linha = mysqli_fetch_assoc($resultado)) {
		echo "<tr> <td> id: " . $linha["id"]. " </td><td>Nome: " . 
		$linha["nome"]. "</td><td> Informações de atendimento: " . $linha["descricao"]. " </td><td>Valor: " . 
		$linha["valor"]. "</td></tr>";






	}
	echo "</table>";
} else {
    echo "0 resultados";
}

mysqli_close($conexao);

?>

<div class="botaoVoltar">
    <form action="index.html">
        <button type="submit" class="btn btn-info">Voltar</button>
    </form>
</div>

</body>
</html>





<!-- link de ajustes de layouts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>