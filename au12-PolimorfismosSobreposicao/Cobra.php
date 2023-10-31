<?php
# imports:
require_once('Animal.php');
require_once('Reptil.php');

// class filha de Reptil-->Animal
class Cobra extends Reptil
{
    
    //Atributos
    private $id = 1;
    private $codeNome = 'Cobra-Snake';
    private $corPele;

    //metodo (function) contruct 
    public function __construct($peso, $idade, $corPele)
    {
        $i = $this->id;
        $this->id++;

        $this->setCodeNome($this->codeNome."[{$i}]");
        $this->setPeso($peso);
        $this->setidade($idade);
        $this->setCorPele($corPele);
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
    public function getCorPele()
    {
        return $this->corPele;
    }
    public function setCorPele($corPele){
        $this->corPele = $corPele;
    }

    // metodos -- comportamento unico
    public function renovarPele()
    {
        echo 'Cobra: trocou de pele !';
    }

    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Cobra: Cobra Rastejando:';
    }

    public function alimentar()
    {
        echo 'Cobra: Engolir insectos, Ratos ... ';
    }

    public function emitirSom()
    {
        echo 'Cobra: xii! xii!';
    }
}

?>