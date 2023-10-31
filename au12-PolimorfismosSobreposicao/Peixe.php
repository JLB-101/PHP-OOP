<?php
# imports:
require_once('Animal.php');

// class filha da Animal
class Peixe
{

    //cordoPeixe
    private $corEscama;

    public function  getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

     // metodos -- comportamento unico
    public function soltarBolha(){
        echo'saltando bolha: blu! blu!';
    }

   
     # Metedos: SobrePosicao
    public function locomover(){
       echo'Peixe: Nadar';
    }

    public function alimentar(){
        echo 'Peixe: Comer insectos, iscas outros peixer menores ... ';
    }

    public function emitirSom(){
        echo 'Peixe: saltando bolha -- blu! blu! blu! blu!';
    }


}

?>