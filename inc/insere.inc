<?php 

include 'conecta_mysql.inc';

$nromat 	 = $_POST['nromat'];
$nome 	 = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado  = $_POST['estado'];
$sexo  = $_POST['sexo'];
$datanasc  = $_POST['datanasc'];
$codcurso  = $_POST['codcurso'];

$sql = "INSERT INTO alunos VALUES";
$sql .= "('$nromat','$nome','$cidade','$estado','$sexo','$datanasc','$codcurso')";

if ($conexao->query($sql) == TRUE) {
	ini_set('max_execution_time', 300);
	echo  "Aluno incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>