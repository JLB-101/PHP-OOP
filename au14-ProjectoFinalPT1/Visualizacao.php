<?php 
# imports:
require_once('Pessoa.php');
require_once('Gafanhoto.php');
require_once('Video.php');


class Visualizacao{

    //Atributs
    private $espectador;
    private $filme;

    //construct


    //gets & sets
    public function getEspectador(){
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
   
    //Metodos (function) -- Aplicacao do pilimorfismo de sobrecarga:

    public function avaliar(){}

    public function avaliarnota($nota){
        $this->espectador = $nota;
    }
    public function avalar($porc){
        $porc;
    }



}

?>