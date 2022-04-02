<?php

namespace Model\account;

class Cpf{

    private string $cpf;

    public function __construct($cpf)
    {
        $this->cpf =  $cpf;
    }

    public function getCpf(){
        return $this->titular->cpf;
    }
}