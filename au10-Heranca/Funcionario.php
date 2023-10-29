<?php

# imports:
require_once('Pessoa.php');

//class mae
class Funcionario extends Pessoa
{
    //Atributos
    private $setor;
    private $trabalhando;

    //construtor
    public function __construct()
    {
    }
    //getts and setts
    public function getSetor()
    {
        return $this->setor;
    }
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }

    //metodo
    public function mudarTrab()
    {
        $this->trabalhando = !$this->trabalhando;
    }

}


?>