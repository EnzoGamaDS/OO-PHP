<?php

namespace Model;

class Endereco{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua  = $rua;
        $this->numero = $numero;
    }

    public function pegaCidade (): string
    {
        return $this->cidade;
    }
    public function pegaBairro (): string
    {
        return $this->bairro;
    }
    public function pegaRua (): string
    {
        return $this->rua;
    }
    public function pegaNumero (): string
    {
        return $this->numero;
    }
}