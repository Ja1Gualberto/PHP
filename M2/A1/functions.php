<?php 
require_once 'data.php';
/**
 * Calcula salario anual
 * 
 * @param float $salarioMensal salario mensal
 * @return float salario anual
 */
function calcularSalarioAno(float $salarioMensal): string{
    $tercoFerias = $salarioMensal /3;
    $salarioAnual = $salarioMensal * 13 + $tercoFerias;
    
    return convertNumberToBRL($salarioAnual);

}
/**
 * Calcula os anos para a aposentadoria
 * @param int $idade idade da pessoa
 * @param string $sexo o sexo da pessoa
 * @return string retorna o quantidade de anos em string
 */
function anospAposentar(int $idade,string $sexo): string{
    if($sexo == "M"){
        $anosAposentadoria = idadeAposetadoriaMasc - $idade;
    }else{
        $anosAposentadoria = idadeAposetadoriaFem - $idade;
    }
    return (string)$anosAposentadoria;
}
/**
 * Converte a fomata
 * @param float $number
 * @return string
 */
function convertNumberToBRL(float $number):string
{
    return "R$ " .number_format($number,2,',','.');
}
$empre = null;
function verificarEmprego(bool $statusEmprego):string{
    return $statusEmprego ? "Empregado" : "Desempregado";
}
echo $empre;
?>