<?php

namespace Model\account;

class Pessoa
{
    private string $nome;
    private Cpf $cpf;

    public function __construct($nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = nome;
        $this->cpf = $cpf;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCpf(Cpf $cpf): void
    {
        $this->cpf = $cpf;
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf->getCpf();
    }

    protected function validaNome(string $name) {
        if (strlen($name > 5)) {
            echo 'nome precisa de 5 caracteres';
            exit();
        }
    }


}