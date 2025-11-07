<?php

class File
{
    use Logger;
 
    public function created(){

        echo 'Arquivo criado';
        $this->log('Arquivo criado');
     }
    public function deleted(){

        echo 'Arquivo deletado';
        $this->log('Arquivo deletado');
     }
}