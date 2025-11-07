<?php

function autoloader($className)
{
    $diretorios = ['classes/', 'traits/'];
    foreach ($diretorios as $diretorio) 
    {
        $diretorio = strtolower($diretorio);
        $className = strtolower($className);
        if(file_exists($diretorio . $className .'.class.php')){
            include_once($diretorio . $className .'.class.php');
            break;
        }
    }
    
}
spl_autoload_register("autoloader");


$user1 = new User();
$user1->creatUser();
$user1->loginUser();
echo'<hr>';
$file1 = new File();
$file1->created();
$file1->deleted();