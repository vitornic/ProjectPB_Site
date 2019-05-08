<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$CPF 	        = $_POST['CPF'];
$Senha          = $_POST['Senha'];
$Nome           = $_POST['Nome'];
$Sobrenome      = $_POST['Sobrenome'];
$Cidade         = $_POST['Cidade'];
$Estado         = $_POST['Estado'];
$DataNasc       = $_POST['DataNasc'];
$erro			= 0;

if (empty($Nome) OR strstr($Nome,' ') == true) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($Cidade)) {
	echo "Favor digitar sua cidade.<br>";
	$erro = 1;
}

if (strlen($Estado)!=2) {
	echo "Favor digitar o seu estado corretamente.<br>";
	$erro = 1;
}

if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include '../inc/insere.inc';
}
?>

</body>
</html>