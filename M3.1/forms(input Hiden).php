<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP','C#'];
$opcoes_LDP =['JAVASCRIPT', 'PHP','C#'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['honeypot'])){
        $erro ='Robo detectado';
    }
    print_r($_POST['teste']);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1><br>
    <?php if(verificaStatus($erro)): ?>
    <p style="color:red">
        <?= $erro ?>
    </p>
    <?php endif;?>
    <?php if(verificaStatus($suceso)): ?>
    <p style="color:green">
        <?= $suceso ?>
    </p>
    <?php endif;?>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome"><br>
        <input type="text" name="email" placeholder="Digite seu email"><br>
        <input type="text" name="telefone" placeholder="Digite sua mensagem"><br>          
        <input type="hidden" name="honeypot" value="testando 123">
        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 