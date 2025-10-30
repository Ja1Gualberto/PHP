<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP','C#'];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tec = $_POST['tec'];

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
    <h2>Escolha dois cursos gratis de LDP:</h2>
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
        
        <?php foreach($tecnologias as $tec): ?>

            <label>
                <?= $tec ?>
            </label>
            <input type="checkbox" name="tec[]" value="<?= $tec ?>"><br>
            <hr>

        <?php endforeach; ?>
        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 