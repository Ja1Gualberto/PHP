<?php 
trait Logger
{
    public function log($mensagem)
    {
    echo '<br>[LOG]: '.$mensagem . '<br>';
    echo 'DateTime: '. date('y-m-d') .'<br>';
    }
}