<?php

include("conexao.php");

$nome = $_GET['nome'];
$data = $_GET['data'];
$email = $_GET['email'];
$senha = $_GET['senha'];

echo "O nome é $nome, a data de nascimento é $data e o email é $email.<br><br>";

$sql = "INSERT INTO usuarios VALUES ('$nome', '$data', '$email', '$senha')";

if(mysqli_query($conexao, $sql)) echo "Cadastro realizado com sucesso";
else echo "Erro: ".mysqli_connect_error($conexao);

?>