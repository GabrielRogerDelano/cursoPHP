<?php 

trait ComAvaliacao
{
    private array $notas = [];

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
}
?>