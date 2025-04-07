<?php
include 'db/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome, quantidade) VALUES ('$nome', '$quantidade')";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" required><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
