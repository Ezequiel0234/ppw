<?php

include("conexao.php");

$nome = $_POST['nome'];
$data = $_POST['data'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo "O nome é $nome, a data de nascimento é $data e o email é $email.<br><br>";

$sql = "INSERT INTO usuarios VALUES ('Ciclano', '2000-03-11', 'ciclano@email.com', 'ciclano123')";

if(mysqli_query($conexao, $sql)) echo "Cadastro realizado com sucesso";
else echo "Erro: ".mysqli_connect_error($conexao);

?>