<?php

abstract class poligonos{
    public float $area;
    public float $altura;
    
    abstract function cacularArea();
}
class quadrado extends poligonos{
    public float $lado;
    public function __construct(float $lado,) {
        $this->lado = $lado;

    }
    public function cacularArea(){
        $this->area = $this->lado * $this->lado;
        echo 'Area do quadrado é: '.$this->area.'<br>';
    }
}
class retangulo extends poligonos{
    public float $largura;
    
    public function __construct(float $largura, float $altura){
        $this->largura= $largura;
        $this->altura = $altura;
    }
    public function cacularArea(){
        $this->area = $this->largura *$this->altura;
        echo 'Area do retangulo é: '.$this->area.'<br>';
    }
}
class triangulo extends poligonos{
    public float $base;
    public function __construct(float $base, float $altura){
        $this->base= $base;
        $this->altura = $altura;
    }
    public function cacularArea(){
        $this->area = ($this->base *$this->altura)/2;
        echo 'Area do triangulo é: '.$this->area.'<br>';
    }
}

$quadrado1 = new quadrado(5);
$retangulo1 = new retangulo(2,4);
$triangulo1 = new triangulo(4,5);

$poligonos= array($quadrado1,$retangulo1,$triangulo1);

foreach($poligonos as $forma){
    $forma->cacularArea();
}