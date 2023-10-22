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
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpate($empates) {
        $this->empates = $empates;
    }
    
    # metodos
    public function apresentar() {}
    public function Status() {}

    public function ganharLuta(){}

    public function perderLuta (){}

    public function empatarLuta (){}
   
}

?>