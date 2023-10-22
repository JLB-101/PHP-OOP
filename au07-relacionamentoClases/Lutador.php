<?php

class Lutador 
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;

    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $categoria,  $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

    }

    # metodos getts and setts
    


    # metodos
    public function apresentar() {}
    public function Status() {}

    public function ganharLuta(){}

    public function perderLuta (){}

    public function empatarLuta (){}





    
}


?>