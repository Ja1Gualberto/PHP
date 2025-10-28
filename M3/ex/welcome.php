<?php
session_start();

if (empty($_SESSION["usuario"])) { 
    header("location: index.php");  
    exit();
}
// if (!empty($_SESSION["tema"])) {
//     $tema = $_SESSION["tema"];
// }else 
if (!empty($_COOKIE["tema"])) {
    $tema = $_COOKIE["tema"];
}else{
    $tema = "Claro";
}

if ($tema == 'Escuro') {
        $cor = "#423f3fff";
        $cor1 = "#fff";
    }else{
        $cor = "#fff";
        $cor1 = "#333";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Acesso </title>
</head>
<body style="background-color: <?= $cor;?>">
    <?php
    echo"bem vindo " .htmlspecialchars($_SESSION["usuario"]);
    echo "<br>";
    echo '<a href="logout.php" style="color: ' . $cor1 . '">Sair</a>'
    ?>
</body>
</html>