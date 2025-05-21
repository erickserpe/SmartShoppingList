<?php
$host = 'localhost';
$db = 'mercado';
$user = 'root';
$pass = '5522';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantidade = (int) $_POST['quantidade'];
    $unidade = $conn->real_escape_string($_POST['unidade']);
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $preco_unitario = (float) str_replace(",", ".", $_POST['preco_unitario']);
    $categoria = $conn->real_escape_string($_POST['categoria']);

    $sql = "INSERT INTO produtos (quantidade, unidade, descricao, preco_unitario, categoria)
            VALUES ($quantidade, '$unidade', '$descricao', $preco_unitario, '$categoria')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Produto adicionado com sucesso!</h2>";
        echo "<p><a href='index.html'>Adicionar outro produto</a></p>";
    } else {
        echo "Erro ao inserir produto: " . $conn->error;
    }
} else {
    echo "Método inválido.";
}

$conn->close();
?>
