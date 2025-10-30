<?php 
$login = '';
$password = '';

if (!empty($_POST["login"] && !empty($_POST['password']))) {
    
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if($login == 'admim' && $password == '123'){

        $mensagem = 'Login efetuado com sucesso';
    }else{
        $mensagem = 'Falha no login';
    }
}else{
    $mensagem = 'Preencha todos os campos';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="teste.php" method="POST">
        <input type="text" name="login" placeholder="Digite o nome da pessoa" value="<?= $login ?? '' ?>">
        <br>
        <input type="password" name="password" placeholder="Digite o nome da pessoa" value ="<?= $password ?? ''    ?>"><br>
        <input type="submit" value="Enviar">
        <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo $mensagem;
        }
        ?><br>
    </form>
</body>
</html>