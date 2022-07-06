<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$banco = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $pass, $banco);

if (!$conexao) die("Deu muito ruim!");
echo "Conexão realizada com sucesso!<br>";

?>