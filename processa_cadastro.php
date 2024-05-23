<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Substitua pelos detalhes da sua conexão
$servername = "localhost";
$username = "root";
$password = "fatec";
$dbname = "itens";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO cad (nome, foto, descricao, valor_compra, valor_venda, quantidade_estoque, estoque_minimo, categoria, local_estoque, informacoes_gerais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssdiiisss", $nome, $foto, $descricao, $valor_compra, $valor_venda, $quantidade_estoque, $estoque_minimo, $categoria, $local_estoque, $informacoes_gerais);

// Define os parâmetros e executa
$nome = $_POST['nome'] ?? '';
$foto = $_POST['foto'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$valor_compra = $_POST['valor_compra'] ?? 0.0;
$valor_venda = $_POST['valor_venda'] ?? 0.0;
$quantidade_estoque = $_POST['quantidade_estoque'] ?? 0;
$estoque_minimo = $_POST['estoque_minimo'] ?? 0;
$categoria = $_POST['categoria'] ?? '';
$local_estoque = $_POST['local_estoque'] ?? '';
$informacoes_gerais = $_POST['informacoes_gerais'] ?? '';

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro ao criar registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
