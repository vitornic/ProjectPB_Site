<?php
  include '../inc/conecta_mysql.inc';

  $Email   = $_POST['Email'];
  $entrar  = $_POST['entrar'];
  $Senha   = $_POST['Senha'];
    if (isset($entrar)) {
             
      $verifica = $conexao->query("SELECT * FROM `normalusers` WHERE Email = '$Email' AND Senha = '$Senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../login.html';</script>";
          die();
        }else{
          setcookie("Email",$Email);
          header("Location:showdb.php");
        }
    }
?>