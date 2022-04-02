<?php
class Titular extends Pessoa {

    private Endereco $endereco;

    public function __construct(Pessoa $nome, Cpf $cpf, $endereco)
    {
		$this->validaNome($nome);
        parent::__construct($nome, $cpf);
    }

    public function pegarEndereco(): Endereco
    {
        return $this->endereco;
    }

}
