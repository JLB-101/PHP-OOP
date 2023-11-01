<?php 
# imports:
require_once('Animal.php');

// class filha da Animal
class Mamifero {

    
    //Atributos
    private $id = 1;
    private $codeNome = 'Mamifero';
    private $corPele;

    //constructor
    public function __construct() {
    }

    //gets and sets
    public function getId(){
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
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
    public function setCorPele($corPele){
        $this->corPele = $corPele;
    }


    
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