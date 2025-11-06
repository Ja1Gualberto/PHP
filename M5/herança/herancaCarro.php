<?php

class Veiculo{

    public string $marca;
    public string $modelo;

    public function Acelerar(){
        echo "acelerando... <br>";
    }
    public function Freiando(){
        echo "freiando... <br>";
    }
}


class Carro extends Veiculo{

    public int $quantidadePortas;
    function __construct(string $marca, string $modelo, int $quantidadePortas){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->quantidadePortas = $quantidadePortas;
    }
    public function quantidadePortas(){
        echo "Abrindo portas <br>";
    }
}
class Moto extends Veiculo{

    public int $cilindradas;
    function __construct(string $marca, string $modelo, int $cilindradas){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cilindradas = $cilindradas;
    }
    public function numCilindradas(){
        echo "Possui ".$this->cilindradas. ' cilindradas <br>';
    }
}
echo 'Carro <br>';
$carro1 = new Carro('Toyota','Etios', '4');
$carro1->acelerar();
$carro1->Freiando();
$carro1->quantidadePortas();
echo'<hr>';
echo'Moto <br>';
$moto1 = new Moto('Yamarra','Fazer','150');
$moto1->acelerar();
$moto1->Freiando();
$moto1->numCilindradas();