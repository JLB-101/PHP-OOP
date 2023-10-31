<?php 
# imports:
require_once('Animal.php');

// class filha da Animal
class Mamifero {

    
    # Metedos: SobrePosicao
    public function locomover(){
        echo'Mamifero: Andar, Correr, Nadar ';
     }
 
     public function alimentar(){
         echo 'Mamifero:  Comer carne, legumes, ervas.. ';
     }
 
     public function emitirSom(){
         echo 'Mamifero:  ';
     }
    
}

?>