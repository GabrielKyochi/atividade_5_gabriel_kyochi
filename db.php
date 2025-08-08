<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "atividade_5_gabriel_kyochi";

$conn = new mysqli($hostname, $username, $password, $dbname);

if (!$conn->connect_error) {
    die("Conexao falhou: " . $conn->connect_error);
}
?>