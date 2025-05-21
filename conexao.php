<?php
$host = 'localhost';
$db = 'mercado';
$user = 'root';
$pass = '5522';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
