<?php
# imports:
//this path is correct
require_once('../au12-PolimorfismosSobreposicao/Lobo.php');

//class filha de  Lobo --->Mamifero-->Animal
class Cachoro extends Lobo {

    //Atributos

    //contructor

    public function __construct() {
        $this->setCodeNome('Cachoro');
    }

    //gets and sets
    

    //Metodos: SobrePosicao

    # Metedos: SobreCarga
    /* Metodo Com mesmo Nome mas com assinatura diferente*/

    public function reagir($falarAlgo) {
        if($falarAlgo == 'toma comida'){
            echo"{$this->getCodeNome()} Abanando o Rabo e latindo";
        }else{
            echo"{$this->getCodeNome()} Rosnando";
        }
    }

    // O PHP nao suporta A SobreCarga

    // public function reagir($hora) {
    //     if($hora < 12){
    //         echo"{$this->getCodeNome()} Abanando o Rabo";
    //     }elseif($hora >=18){
    //         echo"{$this->getCodeNome()} Rosnando";
    //     }else{
    //         echo"{$this->getCodeNome()} AnAbanando o Rabo e latindoa";
    //     }
    // }
        
 
    // public function reagir($dono) {
    //     if($dono){
    //         echo"{$this->getCodeNome()} Abanando o Rabo";
    //     }else{
    //         echo"{$this->getCodeNome()} Rosnando e Latir";
    //     }
    // }
    // public function reagir($idade) {

    //     if($idade < 5){
    //         if($this->getPeso() < 10){
    //             echo"{$this->getCodeNome()} Abanando o Rabo";
    //         }else{
    //             echo"{$this->getCodeNome()} Latindo";
    //         }
    //     }
    // }

}

?>