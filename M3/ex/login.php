<?php
session_start();

if(!empty($_POST["usuario"]) && !empty($_POST["password"])){
    $usuario = htmlspecialchars($_POST["usuario"]);
    $senha = htmlspecialchars($_POST["password"]);

    if($usuario == "admin" && $senha == "admin"){
        $_SESSION["usuario"] = $usuario;
        // $_SESSION["password"] = $senha;
        if(!empty($_POST["tema"])){
            $tema = htmlspecialchars($_POST["tema"]);
            setcookie('tema', htmlspecialchars($_POST['tema']));
            
        }

        header("Location: welcome.php");
    }else{
        echo "Usuario ou Senha incorretos";
        echo"<br>";
        echo '<a href="index.php">Tentar Novamente</a>';
    }

}else{
    echo "Preencha os campos";
    echo"<br>";
    echo '<a href="index.php">Voltar</a>';
}

?>