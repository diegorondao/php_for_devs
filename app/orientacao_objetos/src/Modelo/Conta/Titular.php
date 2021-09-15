<?php

declare(strict_types=1);

namespace Banco\Modelo\Conta;

use Banco\Modelo\Pessoa;
use Banco\Modelo\CPF;
use Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): string
    {
        return $this->endereco;
    }
}