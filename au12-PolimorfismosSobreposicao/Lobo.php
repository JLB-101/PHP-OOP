<?php
# imports:
require_once('Animal.php');
require_once('Mamifero.php');

//class filha de Mamifero-->Animal
class Lobo extends Mamifero
{

    //metodo (function) contruct 
    public function __construct()
    {
        $this->setCodeNome('Cachoro');
    }


    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Lobo: Andar Correr por horas, Andar sobre as Arvores ';
    }

    public function alimentar()
    {
        echo 'Lobo:  Comer Prezas animais  ... ';
    }

    public function emitirSom()
    {
        echo 'Lobo:  auuuu! auuuu!';
    }


}

?>