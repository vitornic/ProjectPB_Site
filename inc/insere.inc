<?php

include 'conecta_mysql.inc';

$Email 	        = $_POST['Email'];
$Senha          = md5($_POST['Senha']);

$sql = "INSERT INTO `normalusers` VALUES";
$sql .= "('$Email','$Senha')";

$selecao  = "SELECT Email FROM normalusers WHERE Email = '$Email'";
$con      = $conexao->query($selecao) or die($conexao->error);
$array    = $con->fetch_array();
$logarray = $array['Email'];

/*
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
*/

if($Email == "" || $Email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo Email deve ser preenchido');window.location.href='../cadastro.html';window.parent.document.title = x;</script>";
 
    }else{
      if($logarray == $Email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse Email já existe');window.location.href='../cadastro.html';window.document.title = 'titulo';﻿</script>";
        die();
 
      }else{
        $conexao->query($sql);
         
        if($sql){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../cadastro.html'</script>";
        }
      }
    }

$conexao->close();

?>