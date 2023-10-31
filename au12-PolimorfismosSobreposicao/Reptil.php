<?php 
# imports:
require_once('Animal.php');

// class filha da Animal
class  Reptil extends Animal{
    
    //
    private $corEscama;

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function info()
    {
        # code
    }

    // metodos -- comportamento unico
    public function renovarPele(){
        echo 'Reptil: trocor de pele !';
    }

    # Metedos: SobrePosicao
    public function locomover(){
       echo'Reptil: Andar sobre objectos, Rastejando:';
    }

    public function alimentar(){
        echo 'Reptil:  Engolir insectos, Ratos ... ';
    }

    public function emitirSom(){
        echo '';
    }
}

?>