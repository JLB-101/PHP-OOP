<?php
# imports:
require_once('Animal.php');

// class filha da Animal
class Ave extends Animal
{

    //Atributo -- caracteristica

    //Atributos
    private $nextId = 1;
    private $id;
    private $codeNome = 'Ave';
    private $corPenas;

    //constructor
    public function __construct() {
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


    //metodo - comporto
    public function fazerNinho()
    {
        echo 'Ninho de capim';
    }

    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Ave Voa';
    }

    public function alimentar()
    {
        echo 'Comer Cereais ,futas, Legumes..';
    }

    public function emitirSom()
    {
        echo 'Ave: soms como Asobios';
    }




}

?>