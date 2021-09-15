<?php

declare(strict_types=1);

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.03;
    }
}