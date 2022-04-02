<?php

namespace Model;
class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(Pessoa $nome, Cpf $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo  = $cargo;
    }

    public function pegarNome(): string
    {
        return $this->getNome();
    }

    public function getCpf(): Cpf
    {
        return $this->getCpf();
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }


}