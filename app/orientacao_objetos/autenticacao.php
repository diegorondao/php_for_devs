<?php

use Banco\Modelo\CPF;
use Banco\Modelo\Funcionario\Gerente;
use Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente('João da Silva', new CPF('123.456.789-10'), 10000);

$autenticador->tentaLogin($umDiretor, '4321');
