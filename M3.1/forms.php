<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

// validacaoTexto($erro, $suceso);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $opcao = $_POST['opcao'];
    echo $opcao;
}
$tecnologias =[
    ['code' => 'html', 'nome' => 'HTML'],
    ['code'=> 'css', 'nome'=> 'CSS'],
    ['code'=> 'js', 'nome'=> 'JS'],
    ['code'=> 'php', 'nome'=> 'PHP'],
    ['code'=> 'rn', 'nome'=> 'REACT NATIVE'],
    ['code'=> 'bs', 'nome'=> 'BOOTSTRAP'],
];
$tec_api = [
    'html'=> 'HTML',
    'css'=> 'CSS',
    'js'=> 'JS',
    'php'=> 'PHP',
    'rn'=> 'REACT NATIVE',
    'bs'=> 'BOOTSTRAP',
];






?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
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
        <select name="opcao">
            <?php foreach($tecnologias as $tec): ?>
                
                <option value="<?= $tec['code'] ?>">
                    <?= $tec['nome']; ?>
                </option>

            <?php endforeach; ?>
        </select>
        <input type="submit" value ="Enviar">
    </form>
</body>
</html> 