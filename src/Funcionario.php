<?php

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(Pessoa $nome, Cpf $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo  = $cargo;
    }

    /**
     * @return string
     */
    public function pegarNome(): string
    {
        return $this->getNome();
    }

    /**
     * @return string
     */
    public function getCpf(): Cpf
    {
        return $this->getCpf();
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }
    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }


}