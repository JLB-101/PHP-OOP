<?php
# imports:
require_once('Animal.php');
require_once('Reptil.php');

// class filha de Reptil-->Animal
class Camaleao extends Reptil
{
    private $corPele;

    public function getPele()
    {
        return $this->corPele;
    }

    public function setPele($corPele)
    {
        $this->corPele = $corPele;
    }

   // metodos -- comportamento unico
    public function miudarCor($corpele)
    {
        $this->corPele = $corpele;

        if ($this->getPele() != $corpele) {
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