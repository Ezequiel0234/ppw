<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) die("Deu muito ruim!");
echo "Conexão realizada com sucesso!<br>";

?>