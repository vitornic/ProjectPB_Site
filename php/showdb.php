<?php
header("Content-type: text/html; charset=utf-8");

$connection = new mysqli("localhost", "root", "", "nome do banco de dados");
$sql = $connection->query("Select * From nomedatabela");

if ($sql) {
    while ($exibe = $sql-> fetch_assoc()){
        foreach ($exibe as $key => $value){
            echo "<br />" . $value;
        }

    }
}

?>