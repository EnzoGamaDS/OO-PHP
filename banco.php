<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('074.104.305-08', 'Lorenzo Gama');

$primeiraConta->deposita(1500);
echo $primeiraConta->pegaNome(). PHP_EOL;
echo $primeiraConta->pegaSaldo(). PHP_EOL;
echo $primeiraConta->pegaCPF(). PHP_EOL;

$qt = Conta::quantidadeDeContas();
echo $qt ;