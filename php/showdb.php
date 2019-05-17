<?php
header("Content-type: text/html; charset=utf-8");

include '../inc/conecta_mysql.inc';
$consulta   = "SELECT * FROM normalusers";
$con        = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Visualizar</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <div  class="custom-padding">
		<nav>
			<div class="logo">Pan!c Button</div>
			<div>
				<ul class="menu-area">
				<li>
					<a href="../index.html">Início</a>
				</li>
				<li>
					<a href="../login.html">Login</a>
				</li>
				<li>
					<a href="../cadastro.html">Cadastro</a>
				</li>
				<li class="active">
					<a href="#">Visualizar</a>
				</li>
				<li>
					<a href="#">test</a>
				</li>
				</ul>
			</div>
		</nav>
	</div>
</head>

<body>
	<div>
		<?php
  			$login_cookie = $_COOKIE['login'];
    			if(isset($login_cookie)){
				    echo"Bem-Vindo, $login_cookie <br>";
				    echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    			}else{
				    echo"Bem-Vindo, convidado <br>";
				    echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
				    echo"<br><a href='../login.html'>Faça Login</a> Para ler o conteúdo";
    			}
?>

	</div>

	<div>
		<table class="table table-responsive">
			<thead>
				<tr>
					<td>E-mail</td>
					<td>Senha</td>
				</tr>
				<?php while($dado = $con->fetch_array()) { ?>
				<tr>
					<td><?php echo $dado['Email']; ?></td>
					<td><?php echo $dado['Senha']; ?></td>
				</tr>
				<?php } ?>
			</thead>
		</table>
  </div>
</body>
</html>