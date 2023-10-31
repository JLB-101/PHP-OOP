<?php
# imports:
require_once('Animal.php');
require_once('Reptil.php');

// class filha de Reptil-->Animal
class Cobra extends Reptil{

    //Atributos
    private $corPele;

    // metodos -- comportamento unico
    public function renovarPele(){
        echo 'Cobra: trocou de pele !';
    }

    # Metedos: SobrePosicao
    public function locomover(){
       echo'Cobra: Cobra Rastejando:';
    }

    public function alimentar(){
        echo 'Cobra: Engolir insectos, Ratos ... ';
    }

    public function emitirSom(){
        echo 'Cobra: xii! xii!';
    }
}

?>