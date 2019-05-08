<?php

include 'conecta_mysql.inc';

$CPF 	        = $_POST['CPF'];
$Senha          = $_POST['Senha'];
$Nome           = $_POST['Nome'];
$Sobrenome      = $_POST['Sobrenome'];
$Cidade         = $_POST['Cidade'];
$Estado         = $_POST['Estado'];
$DataNasc       = $_POST['DataNasc'];

$sql = "INSERT INTO `normalusers` VALUES";
$sql .= "('$CPF','$Senha','$Nome','$Sobrenome','$Cidade','$Estado','$DataNasc')";

if ($conexao->query($sql) == TRUE) {
	ini_set('max_execution_time', 300);
	echo  "Cadastrado com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>
