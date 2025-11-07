<?php

class Conta{
    // Atributo
    private float $saldo;
    private float $saldoChequeEspecial;
    // Métodos
    public function __construct(float $saldo){
        $this->saldo = $saldo;

    } 
    public function chequeEspecial(float $valor){
        if($valor > 100){
            echo"Não é possivel usar mais que R$ 100 do cheque especial";
            echo "<br>";
            return;
        }else if($this->saldoChequeEspecial >= 0 && $this->saldoChequeEspecial <= 100 && $this->saldoChequeEspecial + $valor <100){
            $this->saldoChequeEspecial += $valor;
            $this->saldo += $this->saldoChequeEspecial;
            $this->mostrarSaldo('especial');
        }else{
            echo "O valor estrapola: R$ ".$valor. " ultrapassa o limite do chque especial";
            echo "<br>";
        }
    }
    public function mostrarSaldo(string $tipo){
        switch($tipo){
        case 'normal':
            echo "Saldo atual: R$ " .number_format( $this->saldo,2,".","")."";
            echo "<br>";
            break;
        case"especial":
            echo "Saldo atual do cheque especial: -R$ ".number_format( $this->saldoChequeEspecial,2,".","")."";
            echo "<br>";
            break;
        default:
            echo "Saldo atual: R$ " .number_format( $this->saldo,2,".","")."";
            echo "<br>";
            echo "Saldo atual do cheque especial: R$ ".number_format( $this->saldoChequeEspecial,2,".","")."";
            echo "<br>";
            break;
        }
    }
    public function sacar(float $valor){
        if($valor > $this->saldo ){
            echo "Você não possui saldo suficiente";
            echo "<br>";
            return;
        }else{
            $this->saldo -= $valor;
            echo "Você sacou: R$ " . $valor;
            echo "<br>";
            $this->mostrarSaldo('normal');
            // return;
        }
    }
    public function depositar(float $valor){
        if($valor > 100){
            echo "Não é possivel de positar mais que R$ 100";
            echo "<br>";
        }else{
            $this->saldo += $valor;
            echo "Você depositou: R$ " . $valor;
            echo "<br>";
            $this->mostrarSaldo('normal');
        }
    }
   
    public function getSaldo()  {
        return $this->saldo;
    }
}
$conta1 = new Conta(2000);
$conta1->chequeEspecial(99);
$conta1->chequeEspecial(2);
$conta1->mostrarSaldo('normal');