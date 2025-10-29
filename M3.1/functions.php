<?php

// function verificaStatus($erro){
//     if(!empty($erro) && $_SERVER["REQUEST_METHOD"] == "POST"){
//         return true;
//     }else{
//         return false;
//     }
// }
// Formata(Limpa os espaços) de $texto/string limpa 
// $texto = filter_var($texto, FILTER_SANITIZE_EMAIL);
//
// Valida se o texto está formatado como email
// if(filter_var($texto, FILTER_VALIDATE_EMAIL) == false){
// $erro = 'Email invalido';
// }
function verificaStatus( $status ) {
    if(!empty($status) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    }else{
        return false;
    }
}

function validacaoTexto(&$erro,&$suceso){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        if(!isset($_POST['texto'])){
            $erro = 'Texto não submetido';
            return;
        }
        $texto = $_POST['texto'];
        $texto = htmlspecialchars($texto);
        $texto = trim($texto);
        if(empty($texto)){
            $erro = 'O campo texto é obrigatorio';
        }
        // elseif(filter_var($texto,FILTER_VALIDATE_EMAIL) ==false){
        //     $erro = 'Email invalido';
        // }
        // elseif(strpos($texto,'@') == false){
        //     $erro = 'O texto preecisa de um @';
        // }
         elseif(strlen($texto) < 5){
            $erro = 'O texto tem que ter pelo menos 5 caracteres';
        }elseif(strlen($texto)>15){
            $erro = 'O texto tem que ter no maximo 15 caracteres';
        }if($erro == null){
            $suceso = 'Campo validado';
        }
    }
}
?>