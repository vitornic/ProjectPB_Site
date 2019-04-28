<?php 

include 'conecta_mysql.inc';

$edit1    	 = $_POST['edit1'];
$edit2 	         = $_POST['edit2'];
$edit3           = $_POST['edit3'];
$edit4           = $_POST['edit4'];
$edit5           = $_POST['edit5'];
$edit6           = $_POST['edit6'];
$edit7           = $_POST['edit7'];

$sql = "INSERT INTO table VALUES";
$sql .= "('$edit1','$edit2','$edit3','$edit4','$edit5','$edit6','$edit7')";

if ($conexao->query($sql) == TRUE) {
	ini_set('max_execution_time', 300);
	echo  "Cadastrado com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>
