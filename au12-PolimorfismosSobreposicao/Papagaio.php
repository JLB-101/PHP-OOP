<?php
# imports:
require_once('Animal.php');
require_once('Ave.php');

// class filha de Ave-->Animal

class Papagaio extends Ave
{

    //Atributos
    private $nextId = 1;
    private $id;
    private $codeNome = 'Papagaio';
    private $corPenas;

    //metodo (function) contruct 
    public function __construct($peso, $idade, $corPenas)
    {
        $this->id = $this->nextId;
        $this->nextId++;

        $this->setCodeNome($this->codeNome . "[{$this->getId()}]");
        $this->setPeso($peso);
        $this->setidade($idade);
        $this->setCorPenas($corPenas);
    }

    //gets and sets
    public function getId(){
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
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

    public function info()
    {
        echo "Nome do Animal: {$this->getCodeNome()}<br>Peso: {$this->getPeso()}<br>idade do Animal: {$this->getIdade()} <br> Cor do Animal:  {$this->getCorPenas()} <hr> ";
    }

}

?>