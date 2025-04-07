<?php
include 'db/conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
