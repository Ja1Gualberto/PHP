<?php 
require 'functions.php';
$suceso = null;
$erro = null;
$status= null;

$paymentForms = ['Cartão', 'Boleto', 'Pix', 'Dinheiro'];
$paymentSelect = $_POST['payment'] ??'';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    
    if(empty($_POST['payment'])){
        $erro = 'Erro ao informar a forma de pagamento';
    }
    $payment = $_POST['payment'] ?? '';
    var_dump($payment);
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
    <h1>Escolha a forma de pagamento</h1><br>
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
        
        <?php foreach($paymentForms as $paymentOpition): ?>

            <label>
                <?= $paymentOpition ?>
            </label>
            <input 
            type="radio" 
            name="payment" 
            value="<?= $paymentOpition ?>"
            <?= $paymentOpition === $paymentSelect ?'checked':''?>
            ><br>

        <?php endforeach; ?>
        <input type="submit" value ="Enviar"><br>
    </form>
</body>
</html> 