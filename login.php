<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: 87%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: #007BFF;
        }
    </style>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aqui você deve verificar as credenciais do usuário com o banco de dados
    // Neste exemplo, estamos apenas verificando se o usuário é "admin"
    if ($username == "admin" && $password == "fatec") {
        header("Location: cadastro.php");
        exit();
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
?>
