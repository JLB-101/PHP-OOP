<?php 
class Papagaio extends Ave{

    //Atributos
    private $corPenas;

    // metodos -- comportamento unico
    

    # Metedos: SobrePosicao
    public function locomover(){
       echo'Pagaio Voando';
    }

    public function alimentar(){
        echo 'Comer futas, Legumes..';
    }

    public function emitirSom(){
        echo 'Papagaio: Emitar Fala humana: oi oi ola';
    }
    
}

?>