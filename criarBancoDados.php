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

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha);

// Cria o banco de dados
$sql = "CREATE DATABASE bdTeste";
if (mysqli_query($conexao, $sql)) {
    
    echo " <p> Banco de dados criado com sucesso! </p>";
// Fazer condição que retorna mensagem quando o banco já estiver
} else {
    echo "Erro na criação do banco de dados: " .  mysqli_error($conexao);
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