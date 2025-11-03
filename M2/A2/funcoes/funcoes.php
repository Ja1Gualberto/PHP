<?php
$anoNascimento = 2004;

/**
 * Verificar Idade
 * @param int $anoNascimento numero do ano de nascimento
 * @return int $idade atual
 */
function verificarIdade(int $anoNascimento):int{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
/**
 * Gera uma String de permissão de entrada
 * @param int $idade idade da pessoa
 * @param bool $acompanhante Se está acompanhado
 * @return string Permissão do indivíduo
 */
function entradaFesta(int $idade,bool $acompanhante = true):string{
    $idadePermitida = 18;
    if($idade >= $idadePermitida){
        return "Entrada Permitida";
    }else if($idade < $idadePermitida && $acompanhante){
        return "Entrada permitida com acompanhante";
    }else {
        return "Entrada Negada";
    }
}
echo "2007 sem acompanhante: ".entradaFesta(2007,true)."<br />";
echo "2005 sem acompanhante: " .entradaFesta(2005,false)."<br />";


?>