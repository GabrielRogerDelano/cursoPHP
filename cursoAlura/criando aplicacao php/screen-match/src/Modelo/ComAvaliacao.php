<?php 

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * @throws NotaInvalidaException Se a nota for maior que 10 ou menor que 0
     */
    public function avalia(float $nota): void
    {
        if($nota > 10 || $nota < 0){
            throw new NotaInvalidaException();
        }
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