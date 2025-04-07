<?php
include 'db/conexao.php';

$nomeLista = $_POST['nome_lista'];
$nomes = $_POST['nome'];
$quantidades = $_POST['quantidade'];

// 1. Criar a nova lista
$sqlLista = "INSERT INTO listas (nome) VALUES ('$nomeLista')";
$conn->query($sqlLista);
$listaId = $conn->insert_id;

// 2. Inserir os produtos associados a essa lista
for ($i = 0; $i < count($nomes); $i++) {
    $nome = $nomes[$i];
    $quantidade = $quantidades[$i];

    $sqlProduto = "INSERT INTO produtos (nome, quantidade, lista_id) 
                   VALUES ('$nome', '$quantidade', '$listaId')";
    $conn->query($sqlProduto);
}

// Redireciona para a página de listas
header("Location: listas.php");
exit;
?>
