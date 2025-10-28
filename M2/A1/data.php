<?php
require_once 'functions.php';
define('idadeAposetadoriaMasc', 65);
define('idadeAposetadoriaFem', 62);

$nome = "João Pedro G.";
$idade = 20;
$sexo = 'M';
$salarioMensal = 1400.50;

$salarioMensalAnual = $salarioMensal *12;
$formatValue2 =number_format($salarioMensalAnual,2,",",".");

$statusEmprego = true;
$skills = ["PHP", "JavaScript", "HTML", "CSS"];

?>