<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP','C#'];
$especifico = ['HTML'];
$tecSelect = $_POST['tec'] ??[];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['tec'])){
        $erro = 'Selecione uma tecnologia';
    }
    $tec= $_POST['tec'] ??[];

    if(count($tec) != 1){
        $erro = 'Selecione apenas uma tecnologia';
    }elseif($tec[0] != 'HTML'){
        $erro = 'Você deve selecionar o HTML';
    }else{
        $suceso ='HTML SELECIONADO';
    }
    var_dump($tec);
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
    <h1>Selecione o HTML</h1><br>
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
        
        <select name="tec[]">
            <?php foreach($tecnologias as $tec):?>
                <option value="<?= $tec ?>"
                    <?= in_array($tec, $tecSelect) ? 'selected' : ''; ?>                    

                    >
                    <?= $tec?>
                </option>
            <?php endforeach;?>
        </select>

        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 