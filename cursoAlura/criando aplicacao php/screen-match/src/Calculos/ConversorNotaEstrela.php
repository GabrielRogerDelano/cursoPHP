<?php

class ConversorNotaEstrela
{
    public function converter(Avaliavel $avaliavel) : float
    {
        $nota = $avaliavel->media();

        return round($nota)/2;
    }
}
?>