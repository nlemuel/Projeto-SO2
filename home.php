<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        h1 {
            color: #333;
        }
        a {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #ffa43a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #ffbf75;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .item {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px;
        }
        .item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
 <div>
    <h1>Bem-vindo à página inicial!</h1>
    <a href="cadastro.php">Ir para a página de cadastro</a><Br>
 <div/>
</body>
</html>

<?php
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

// Consulta para buscar itens com estoque disponível
$sql = "SELECT nome, foto, descricao, valor_venda, categoria FROM cad WHERE quantidade_estoque > 0";

// Se o usuário fez uma consulta pelo nome do item, adiciona uma cláusula WHERE à consulta
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $sql .= " AND nome LIKE '%$nome%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. "<br>";
        echo "Foto: <img src='" . $row["foto"]. "'><br>";
        echo "Descrição: " . $row["descricao"]. "<br>";
        echo "Valor de Venda: " . $row["valor_venda"]. "<br>";
        echo "Categoria: " . $row["categoria"]. "<br><br>";
    }
} else {
    echo "Nenhum item encontrado";
}
$conn->close();
?>

<!-- Formulário para consulta pelo nome do item -->
<form method="post" action="home.php">
    <label for="nome">Consultar nome do item:</label><br>
    <input type="text" id="nome" name="nome"><br>
    <input type="submit" value="Consultar">
</form>


