<?php
# imports:
require_once('Animal.php');

// class filha da Animal
class Peixe extends Animal
{


    //Atributos
    private $id = 1;
    private $codeNome = 'Peixe';
    private $corEscama;

    //constructor
    public function __construct() {
    }

    //gets and sets
    public function getId()
    {
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
    // public function getCorPele()
    // {
    //     return $this->corPele;
    // }
    // public function setCorPele($corPele)
    // {
    //     $this->corPele = $corPele;
    // }

    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

    // metodos -- comportamento unico
    public function soltarBolha()
    {
        echo 'saltando bolha: blu! blu!';
    }


    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Peixe: Nadar';
    }

    public function alimentar()
    {
        echo 'Peixe: Comer insectos, iscas outros peixer menores ... ';
    }

    public function emitirSom()
    {
        echo 'Peixe: saltando bolha -- blu! blu! blu! blu!';
    }


}

?>