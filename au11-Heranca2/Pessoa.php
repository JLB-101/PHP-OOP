<?php
/**
 * Eng: An Abstract Classes are classes that define the most elementary structure of a class that you can create. 
 * They cannot be instantiated.
 * 
 * Pt: Uma Classes abstratas são classes que,
 * definem a estrutura mais elementar de uma classe que você possa criar.
 * Elas não podem ser instanciadas.
 */


//class Abstrac
abstract class Pessoa
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
    public function fazerAniversario()
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