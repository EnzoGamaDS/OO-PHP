<?php

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

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param Cpf $cpf
     */
    public function setCpf(Cpf $cpf): void
    {
        $this->cpf = $cpf;
    }


    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return Cpf
     */
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