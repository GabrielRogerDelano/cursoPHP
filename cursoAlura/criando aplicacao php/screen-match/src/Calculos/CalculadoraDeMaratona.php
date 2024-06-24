<?php

class CalculadoraDeMaratona 
{

    public int $duracaoMaratona = 0;

    public function incluir(Titulo $titulo)
    {   
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoMaratona;
    }
}

?>