<?php
class Titular {

    private Cpf $cpf;
    private string $nome;

    public function __construct($nome, $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->titular->nome;
    }
    public function validaNome(string $name) {
        if (strlen($name > 5)) {
            echo 'nome precisa de 5 caracteres';
            exit();
        }
    }

}
