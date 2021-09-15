<?php

use Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Diego Rondão',
        new Endereco('São Paulo', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
