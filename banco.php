<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular('enzo gam dos santos', new Cpf('074.104.305-08')));

$primeiraConta->deposita(1500);
// echo $primeiraConta->getNome(). PHP_EOL;
// echo $primeiraConta->getSaldo(). PHP_EOL;
// echo $primeiraConta->pegaCPF(). PHP_EOL;

var_dump($primeiraConta);

$qt = Conta::quantidadeDeContas();
echo $qt ;