<?php

namespace ScreenMatch\Modelo;

class Serie extends Titulo 
{
    public function __construct(
        string $nome,
        int $anoDeLancamento,
        Genero $genero,
        public int $temporadas,
        public int $episodiosPorTemporada,
        public int $minutosPorEpisodio,

    ) {
        parent::__construct($nome, $anoDeLancamento, $genero);
    }

    #[\Override]
    public function duracaoEmMinutos() : int 
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;    
    }
}
?>