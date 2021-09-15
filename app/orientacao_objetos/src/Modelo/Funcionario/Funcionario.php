<?php

declare(strict_types=1);

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\CPF;
use Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{
    protected string $nome;

    private string $cpf;
    
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    { 
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}