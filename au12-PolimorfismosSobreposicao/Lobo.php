<?php
# imports:
require_once('Animal.php');
require_once('Reptil.php');

class Lobo  extends Mamifero {

    

   //metodo (function) contruct 
   

   # Metedos: SobrePosicao
   public function locomover(){
      echo'Lobo: Andar Correr por horas, Andar sobre as Arvores ';
   }

   public function alimentar(){
       echo 'Lobo:  Comer Prezas animais  ... ';
   }

   public function emitirSom(){
       echo 'Lobo:  auuuu! auuuu!';
   }


}

?>