<?php

class Produto{
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // GETTER = Leitura
    public function getPreco(): string{
        return $this->preco;
    }
    // Setter = Escrita
    public function setpreco(float $preco): Produto{
        $this->preco = $preco;
        return $this;
    }
}
$produto1 = new Produto('Cadeira', 500.00);
var_dump($produto1->getPreco());
$produto1->setpreco(450);
echo'<br>';
var_dump($produto1->getPreco());
echo'<br>';
