<?php

//class mae
class Pessoa
{
    //atributs
    private $nome;
    private $idade;
    private $genero;

    //construtor
    public function __construct()
    {
    }

    //gets and sets
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    // metodo 
    public function fazerAniv()
    {
        $this->idade++;
    }

    //imprimir
    public function info()
    {
        # code
    }
}



?>