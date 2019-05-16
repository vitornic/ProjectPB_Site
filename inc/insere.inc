<?php

include 'conecta_mysql.inc';

$Email 	        = $_POST['Email'];
$Senha          = $_POST['Senha'];

$sql = "INSERT INTO `normalusers` VALUES";
$sql .= "('$Email','$Senha')";

if (getenv("REQUEST_METHOD") == "POST") {
    if ($conexao->query($sql) == TRUE) {
	ini_set('max_execution_time', 300);
	echo '<script>alert("Dados cadastrados!");
		location.href = "../cadastro.html";
	</script>';

	} else { echo '<script>alert("Não foi possível cadastrar!");
				location.href = "../cadastro.html";
		</script>'; }
}

$conexao->close();

?>
