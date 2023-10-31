<?php
# imports:
require_once('Animal.php');
require_once('Reptil.php');

// class filha de Reptil-->Animal
class Camaleao extends Reptil
{
    //Atributs
    private $id = 1;
    private $codeNome = 'Camaleao';
    private $corPele;

    //metodo (function) contruct 
    public function __construct($peso, $idade, $corPele)
    {
        $i = $this->id;
        $this->id++;

        $this->setCodeNome($this->codeNome . "[{$i}]");
        $this->setPeso($peso);
        $this->setidade($idade);
        $this->setCorPele($corPele);
       
    }
    


    //gets & sets
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

   // metodos -- comportamento unico
    public function miudarCor($corpele)
    {
        $this->corPele = $corpele;

        if ($this->getCorPele() != $corpele) {
            echo 'O cameleao trocou cor !';
        }else{
            echo 'O cor continua a mesma !';
        }
    }

    # Metedos: SobrePosicao
    public function locomover(){
       echo'Cameleao: Andar Lento, Andar sobre as Arvores ';
    }

    public function alimentar(){
        echo 'Cameleao:  Engolir insectos voadores ... ';
    }

    public function emitirSom(){
        echo 'Cameleao:  ';
    }


}

?>