<?php

namespace Banco\Modelo\Contracts;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}