<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP','C#'];
$opcoes_LDP = ['JAVASCRIPT', 'PHP', 'C#'];

// validacaoTexto($erro, $suceso);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $opcoes = $_POST['opcoes'];
    print_r($opcoes);
    if(count($opcoes) > 2){
        $erro = 'Selecione exatamente duas tecnologias';
    }
    foreach($opcoes as $op){
        if(!in_array($op, $opcoes_LDP)){
            $erro = 'A tecnologia '.$op. ' não é valida';
        
        }
    }
    if(empty($erro)){
    $suceso = 'Sua seleção fucionou';
    }
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

        <select name="opcoes[]" multiple>

           <?php foreach($tecnologias as $chave): ?>

            <option value="<?= $chave?>">
                <?= $chave;?>
            </option>

            <?php endforeach; ?>
            <option value="RN">React Native</option>
        </select>

        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 