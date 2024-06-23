<?php

class Filme {
    
    private array $notas = [];
    
    public function __construct(
        private string $nome,
        private int $anoDeLancamento,
        private string $genero
    )
    {
        $this->nome = $nome;
        $this->anoDeLancamento = $anoDeLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] += $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas); 
        $quantidade = count($this->notas);

        return $somaNotas / $quantidade;
    }

    public function anoLancamento(): int
    {
        return $this->anoDeLancamento;
    }

    public function definirAnolncamento(int $anoDeLancamento): void
    {
        $this->anoDeLancamento = $anoDeLancamento;
         
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function genero(): string
    {
        return $this->genero;
    }
}
?>