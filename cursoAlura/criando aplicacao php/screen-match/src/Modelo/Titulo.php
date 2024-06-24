<?php

abstract class Titulo implements Avaliavel
{
    
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoDeLancamento,
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas); 
        $quantidade = count($this->notas);

        return $somaNotas / $quantidade;
    }

    abstract public function duracaoEmMinutos() : int;
}
?>