<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}