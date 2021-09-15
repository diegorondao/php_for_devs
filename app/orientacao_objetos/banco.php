<?php

declare(strict_types=1);

namespace Banco\Modelo;

require_once '../autoload.php';

use Banco\Modelo\Conta;
use Banco\Modelo\CPF;
use Banco\Modelo\Endereco;

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Maria', new Endereco('São Paulo', 'Sé', 'Rua tal', '132A'  )));
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new CPF('698.549.548-10'), 'Patricia', new Endereco('São Paulo', 'Sé', 'Rua tal', '132A'  )));
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('12333'), 'Abcdefg'));
echo Conta::recuperaNumeroDeContas();
