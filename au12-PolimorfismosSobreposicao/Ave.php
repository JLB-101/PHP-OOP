<?php
# imports:
require_once('Animal.php');

// class filha da Animal
class Ave extends Animal
{

    //Atributo -- caracteristica
    private $corPena;

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