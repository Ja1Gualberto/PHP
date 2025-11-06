<?php

abstract class Animal{

    abstract public function emitirSom();
}


class Cachorro extends Animal{
    public string $nome;
    public int $meses;
    public function __construct($nome, $meses){
        $this->nome = $nome;
        $this->meses = $meses;
    }
    public function emitirSom(){
        return 'Au Au';
    }
}
class FilaBrasileiro extends Cachorro{
    public function emitirSom(){
        if($this->meses > 3){
            return 'Ruf Ruf';
        }else{
            return 'Au Au';
        }
    }
}
class Gato extends Animal{
    public $nome = 'Gato';
    public function emitirSom(){
        return 'Miau';
    }
}
class Peixe extends Animal{
    public $nome = 'Peixe';
    public function emitirSom(){
        return null;
    }
}


function fazerAnimalEmitirSom($animal){
    echo '<br> O animal '. $animal->nome .' faz: '. $animal->emitirSom(). '<br>';
}
 
$gato=new Gato();
$cachorro = new FilaBrasileiro('Rufos', '6');
$peixe = new Peixe();

$animais = array($cachorro,$gato,$peixe);

foreach($animais as $animal){
    fazerAnimalEmitirSom($animal);
}
