<?php 

$Email 	        = $_POST['Email'];
$Senha          = md5($_POST['Senha']);
$erro			= 0;

if ($erro == 0) {
	echo ".<br>";
	include '../inc/insere.inc';
}
?>