<?php
require_once 'conexao.php';

$result = $conn->query("SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Produtos Cadastrados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h1 class="mb-4">Produtos Cadastrados</h1>
    <a href="index.html" class="btn btn-secondary mb-3">Adicionar Produto</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Quantidade</th>
          <th>Unidade</th>
          <th>Descrição</th>
          <th>Preço Unitário</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['quantidade'] ?></td>
            <td><?= $row['unidade'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td>R$ <?= number_format($row['preco_unitario'], 2, ',', '.') ?></td>
            <td><?= $row['categoria'] ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>

<?php $conn->close(); ?>
