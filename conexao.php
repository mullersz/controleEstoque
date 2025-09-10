<?php 
$server = "localhost";
$user = "root";
$passwor = "root";
$database = "db_estoque";

$conexao = new mysqli($server,$user, $password,$database);

if (!$conexao) {
    echo "Falha na conexão";

}

?>