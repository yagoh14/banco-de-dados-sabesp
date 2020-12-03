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

/*Colocar aqui as informações para conectar aos seus servidores, caso esteja utilizando o Wampserver
coloque o endereço de conexão, seu usuário e a senha, caso não tenha senha deixe em "branco" com "" ; */
$servidor = "localhost";
$usuario = "root";
$senha = "";

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha);

// Verifica a conexão
if( $conexao == false ) {
   die("A conexão falhou: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";

mysqli_close($conexao);
?>

<div class="botaoVoltar">
    <form action="index.html">
        <button type="submit" class="btn btn-info">Voltar</button>
    </form>
</div>

</body>
</html>
