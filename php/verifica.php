<?php 

$Email 	        = $_POST['Email'];
$Senha          = $_POST['Senha'];
$erro			= 0;

if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include '../inc/insere.inc';
}
?>