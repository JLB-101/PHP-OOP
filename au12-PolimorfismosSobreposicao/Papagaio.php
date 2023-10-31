<?php
# imports:
require_once('Animal.php');
require_once('Ave.php');

// class filha de Ave-->Animal

class Papagaio extends Ave
{

    //Atributos
    private $id = 1;
    private $codeNome = 'Papagaio';
    private $corPenas;

    //metodo (function) contruct 
    public function __construct($peso, $idade, $corPenas)
    {
        $i = $this->id;
        $this->id++;

        $this->setCodeNome($this->codeNome . "[{$i}]");
        $this->setPeso($peso);
        $this->setidade($idade);
        $this->setCorPenas($corPenas);
    }

    //gets and sets
    public function getCodeNome()
    {
        return $this->codeNome;
    }
    public function setCodeNome($codeNome)
    {
        $this->codeNome = $codeNome;
    }
    public function getCorPenas()
    {
        return $this->corPenas;
    }
    public function setCorPenas($corPenas)
    {
        $this->corPenas = $corPenas;
    }

    // metodos -- comportamento unico


    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Pagaio Voando';
    }

    public function alimentar()
    {
        echo 'Comer futas, Legumes..';
    }

    public function emitirSom()
    {
        echo 'Papagaio: Emitar Fala humana: oi oi ola';
    }

}

?>