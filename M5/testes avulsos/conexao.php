<?php

class Conexao{

    private string $conexao;

    public function __construct(){
        $this->conexao = 'Conectado com o banco de dados';
        echo 'Conexão com o banco de dados criada';
        echo'<br>';
    }

    public function __destruct(){
        $this->conexao = '';
        echo 'Conexão encerrada com o banco de dados <br>';
    }

    public function consulta(){
        echo 'Realiza a consulta na banco de dados';
        echo'<br>';
    }

}
$conexao = new Conexao();
$conexao->consulta();
