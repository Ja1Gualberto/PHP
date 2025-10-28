<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Usuario</label>
        <input type="text" name="usuario"><br>
        <label for="password">Senha</label>
        <input type="password" name="password"><br>
        <label for="lembrar">Tema Preferido:</label>
        <select name="tema">
            <option value="selected disabled">Escolha</option>
            <option value="Escuro">Escuro</option>
            <option value="Claro">Claro</option>
        </select><br>
        <input type="submit" value="login">
        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo $mensagem;
        }
        ?><br>
    </form>    

</body>
</html>