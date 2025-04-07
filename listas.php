<?php
include 'db/conexao.php';

// Buscar todas as listas do banco
$sql = "SELECT * FROM listas ORDER BY data_criacao DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listas Salvas</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Usa o mesmo CSS do seu projeto -->
</head>
<body>
    <div class="container">
        <h1>🛒 Listas Salvas</h1>

        <a href="index.php" style="text-decoration:none; color:#28a745;">← Voltar para Nova Lista</a>
        <br><br>

        <?php while ($row = $result->fetch_assoc()): ?>
    <li>
        <a href="ver_lista.php?id=<?= $row['id'] ?>">
            <?= htmlspecialchars($row['nome']) ?>
        </a>
        | | <a href="editar_lista.php?id=<?= $row['id'] ?>">✏️ Editar</a>
|           <a href="excluir_lista.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir esta lista?')">🗑️ Excluir</a></a>
    </li>
<?php endwhile; ?>

    </div>
</body>
</html>
