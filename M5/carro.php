<?php
class Carro{
    public string $cor;
    public int $ano;
    public string $modelo;

    public function __construct(string $cor, int $ano, string $modelo){
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
    }
    public function acelerar(){
        echo 'Acelerando...';
        echo '<br>';
    }
    public function freiar(){
        echo 'Freiando...';
        echo '<br>';
    }
    public function ligar(){
        echo 'ligando...';
        echo '<br>';
    }
}

$etios = new Carro('prata',2015,'1.5xl');


