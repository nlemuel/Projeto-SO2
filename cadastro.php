<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        h1 {
            color: #333;
        }
        form {
	    display: flex
            background: #ffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], textarea, select {
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
    </style>
</head>
<body>
  <div>
    <h1>Bem-vindo à página de cadastro!</h1>
    <form method="post" action="processa_cadastro.php">
        <label for="id">ID do item:</label><br>
        <input type="text" id="id" name="id" required><br>
        
        <label for="nome">Nome do item:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="foto">URL da foto ilustrativa:</label><br>
        <input type="text" id="foto" name="foto"><br>
        
        <label for="descricao">Descrição do item:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br>
        
        <label for="valor_compra">Valor de compra:</label><br>
        <input type="number" id="valor_compra" name="valor_compra" step="0.01" min="0"><br>
        
        <label for="valor_venda">Valor de venda:</label><br>
        <input type="number" id="valor_venda" name="valor_venda" step="0.01" min="0"><br>
        
        <label for="quantidade_estoque">Quantidade em estoque:</label><br>
        <input type="number" id="quantidade_estoque" name="quantidade_estoque" min="0"><br>
        
        <label for="estoque_minimo">Estoque mínimo:</label><br>
        <input type="number" id="estoque_minimo" name="estoque_minimo" min="0"><br>
        
        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria">
            <option value="Porção">Porção</option>
            <option value="Bebida">Bebida</option>
            <option value="Combo">Combo</option>
            <option value="Diversos">Diversos</option>
        </select><br>
        
        <label for="local_estoque">Local do estoque:</label><br>
        <input type="text" id="local_estoque" name="local_estoque"><br>
        
        <label for="informacoes_gerais">Informações em geral:</label><br>
        <textarea id="informacoes_gerais" name="informacoes_gerais"></textarea><br>
        
        <input type="submit" value="Cadastrar">
    </form>
    <a href="home.php">Ir para a página inicial</a>
  <div/>
</body>
</html>
