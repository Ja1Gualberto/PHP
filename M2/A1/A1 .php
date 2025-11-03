<?php 
require_once 'data.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome;?></strong></p>
            <p>Idade: <strong><?= $idade;?></strong></p>
            <p>Sexo: <strong><?= $sexo;?></strong></p>
            <p>Salario Mensal: <strong><?= convertNumberToBRL($salarioMensal) ?></strong></p>
            <p>Salario Anual: <strong><?= calcularSalarioAno($salarioMensal);?></strong></p>
            <p>Status do Emprego: <strong><?php echo verificarEmprego($statusEmprego);?></p>
            <p>Anos para aposentadoria:  <strong>
            <?= anospAposentar($idade, $sexo)?>
            </strong></p>
            <p>Skills: <strong><?= implode(", ", $skills);?></strong></p>
        </div>      
    </div>

</body>
</html>
