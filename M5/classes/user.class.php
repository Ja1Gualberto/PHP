<?php
class User{

    use Logger;
    public function creatUser()
    {
        echo "Usuario criado";
        $this->log("Usuario criado");
    }
    public function loginUser(){
        echo "Usuario logado";
        $this->log("Usuario logado");
    }
}