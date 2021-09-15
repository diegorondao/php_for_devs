<?php

declare(strict_types=1);

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): string
    {
        return $this->endereco;
    }
}