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
$banco = "bdTeste"; // inserir aqui qual o banco deseja criar as tabelas

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Cria a tabela
$sql = "CREATE TABLE itens (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(40) NOT NULL,
   descricao VARCHAR(40) NOT NULL,
   valor DECIMAL(10,2)
)";

if (mysqli_query($conexao, $sql)) {
    echo "Tabela criada com sucesso!<br>";
} else {
    echo "Erro na criação da tabela: " . mysqli_error($conexao);
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