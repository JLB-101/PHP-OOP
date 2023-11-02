<?php 
# imports:
require_once('Pessoa.php');
require_once('Gafanhoto.php');
require_once('Video.php');


class Visualizacao  {

    //Atributs
    private $espectador;
    private $filme;

    //construct
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setView($this->filme->getView() + 1);
        $this->espectador->setTotAsistido($this->espectador->getTotAsistido() + 1);
    }


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

     //Avaliacacao: atribuicao
    public function avaliar($nova){
        $this->filme->setAvaliacao((int)$nova);
    }

    //Avaliacacao: por NOTA
    public function avaliarN($nota){
        $this->filme->setAvaliacao($nota);
    }

    //Avaliacacao: por %porcentagem
    public function avaliarP ($porc){
        //valor da avaliacao($nova)
        $nova = 0;
        if( $porc <= 20){
            $nova = 3;
        }elseif( $porc <= 50 ){
            $nova = 5;
        }
        elseif ($porc <= 90) {
            $nova = 10;
        }
    }



}

?>