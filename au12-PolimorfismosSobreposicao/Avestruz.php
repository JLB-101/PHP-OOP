<?php
# imports:
require_once('Animal.php');
require_once('Ave.php');

// class filha de Ave-->Animal

class Avestruz extends Ave
{
    //Atributo
    private $altura;


    //
    public function abrirPelansTrazeira(){
        echo"Avestrus: Abriu as pelas Trazeiras";
    }
    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Avestrus: Andar, Correr';
    }

    public function alimentar()
    {
        echo 'Avestruz: Comer Gramas, Sementes. Insects.';
    }

    public function emitirSom()
    {
        echo 'Avestruz: Au Aah ah ah ah';
    }

}
?>