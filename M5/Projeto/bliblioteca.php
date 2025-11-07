<?php

class Livro
{
    private static int $proxId = 1;
    public int $id;
    public string $titulo;
    public string $autor;
    public bool $disponivel;
    public function __construct(string $titulo, string $autor, bool $disponivel){
        $this->id = self::$proxId;
        self::$proxId++;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
    }

    public function estaDisponivel(){
        if($this->disponivel){
            echo '<br>O livro '.$this->titulo .' está disponivel para emprestimo <br>';
        }else{
            echo '<br>O livro '.$this->titulo .' já está emprestado<br>';
        }
    }
    public function checkDisponivel(){
        $this->disponivel = true;
    }
    public function checkIndisponivel(){
        $this->disponivel = false;
    }
    
}

class estante{
    public array $livros= [];

    public function addLivro(Livro $livro){
        $this->livros[] = $livro;
        $livro->checkDisponivel();
        echo'<br>O livro '.$livro->titulo.' foi devolvido a estante<br>';
    }
    public function rmLivro(Livro $livro){}

    public function buscarLivroTitulo(){}
    
    public function listarLIvrosDisponiveis(){}
}

class usuario{
    public string $nome;
    public int $livrosEmprestados;
    public string $tipo;

    public function podePegarEmprestado(){}

    public function addLivroEmprestado(){}

    public function rmLivroEmprestado(){}

    public function listarLIvrosEmprestados(){}
}

class Bibliotecario{

    public function emprestarLivro(){}

    public function devolverLivro(){}

    
}

$livro1 = new livro('pinoquio','clovis','0');
$estante1 = new estante();
$livro1->estaDisponivel();
$estante1->addLivro($livro1); 
$livro1->estaDisponivel();
$livro1->checkIndisponivel();