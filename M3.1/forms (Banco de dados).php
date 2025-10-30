<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$tecnologias = [
    ['codigo' => 'html','nome'=> 'HTML'],
    ['codigo'=> 'css','nome'=> 'CSS'],
    ['codigo'=> 'javascript','nome'=> 'JAVASCRIPT'],
    ['codigo'=> 'php','nome'=> 'PHP'],
    ['codigo'=> 'c#', 'nome'=>'C#']
];
$opcoes_LDP = [
    ['codigo'=> 'javascript','nome'=> 'JAVASCRIPT'],
    ['codigo'=> 'php','nome'=> 'PHP'],
    ['codigo'=> 'c#', 'nome'=>'C#']
];
// $tecAPI = [
//     'html'=>'HTML',
//     'css'=> 'CSS', 
//     'javascript'=> 'JAVASCRIPT',
//     'php'=> 'PHP',
//     'c#'=> 'C#',
// ];

// Versão para Banco de dados
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tec = $_POST['tec'] ?? [];
    var_dump($tec);

    if(count($tec)> 2){
        $erro = 'Selecione extamente duas tecnologias';
    }
    foreach($tec as $LDP){
        if(!in_array($LDP,array_column($opcoes_LDP, 'codigo'))){
            $erro = 'A opção selecionada ('.$LDP.') é invalida. Selecione apenas LDPs.';
            break;
        }
    }
    if(empty($erro)){
        $suceso = 'Parabens pela escolha e bons estudos';
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
                <?= $tec['nome'] ?>
            </label>
            <input type="checkbox" name="tec[]"value="<?= $tec['codigo'] ?>"><br>
            <hr>

        <?php endforeach; ?>
        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 