<?php
include 'db/conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome='$nome', quantidade='$quantidade' WHERE id=$id";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $row['nome'] ?>" required><br><br>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" value="<?= $row['quantidade'] ?>" required><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
