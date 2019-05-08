<?php

$conexao = mysqli_connect('localhost','root','','usuarios');

mysqli_set_charset($conexao,'utf-8');

if ($conexao->connect_error) {
	die("Falha" . $conexao->connect_error);
}

?>