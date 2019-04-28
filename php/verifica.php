<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$edit1 	     = $_POST['edit1'];
$edit2 	     = $_POST['edit2'];
$edit3       = $_POST['edit3'];
$edit4       = $_POST['edit4'];
$edit5       = $_POST['edit5'];
$edit6       = $_POST['edit6'];
$edit7       = $_POST['edit7'];
$erro    	 = 0;

if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($cidade)) {
	echo "Favor digitar sua cidade.<br>";
	$erro = 1;
}

if (strlen($estado)!=2) {
	echo "Favor digitar o seu estado corretamente.<br>";
	$erro = 1;
}

if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';
}
?>

</body>
</html>