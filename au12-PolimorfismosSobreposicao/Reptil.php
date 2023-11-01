<?php
# imports:
require_once('Animal.php');


// class filha da Animal
class Reptil extends Animal
{

    //Atributos
    private $id = 1;
    private $codeNome = 'Reptil';
    private $corPele;
    private $corEscama;

    //metodo (function) contruct 
    public function __construct()
    {
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
    public function getCorPele()
    {
        return $this->corPele;
    }
    public function setCorPele($corPele)
    {
        $this->corPele = $corPele;
    }

    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

    public function info()
    {
        # code
    }

    // metodos -- comportamento unico
    public function renovarPele()
    {
        echo 'Reptil: trocor de pele !';
    }

    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Reptil: Andar sobre objectos, Rastejando:';
    }

    public function alimentar()
    {
        echo 'Reptil:  Engolir insectos, Ratos ... ';
    }

    public function emitirSom()
    {
        echo '';
    }
}

?>