<?php
include 'db/conexao.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Compras</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Minha Lista de Compras</h1>
        
        <form action="adicionar.php" method="POST">
            <input type="text" name="nome" placeholder="Nome do produto" required>
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <button type="submit">Adicionar</button>
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['nome'] ?></td>
                    <td><?= $row['quantidade'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                        <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
