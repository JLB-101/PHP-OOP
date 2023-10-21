<?php
# imports:
require_once('Controlador.php');
class ControleRemote implements Controlador
{

    # Atributos 
    private $volume;
    private $ligado;
    private $tocando;

    #metodo contrutor
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    # metodos
    //getts
    public function getVolume()
    {
        return $this->volume;
    }

    public function getLigado()
    {
        return $this->ligado;
    }
    public function getTocando()
    {
        return $this->tocando;
    }
    //setts($tocando) {

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    public function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }


    # metodos abstractos do controlador
    //sobrescrevendo Metodos


    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        //mostrado o estado do aparelho(Ligado)
        echo '<br> Ligado: ' . ($this->getLigado() ? 'SIM': 'NAO');
        //mostrado o estado do volume(Volume)
        echo '<br> Volume: (' . ($this->getVolume() .'%) ');
        for ($i = 0; $i < $this->getVolume(); $i += 10) { //incremento de + 10
            echo '|';
        }
        //mostrado o estado do aparelho(Tocando)
        echo '<br> Tocando: ' . ($this->getTocando()? 'SIM': 'NAO');

    }

    public function fecharMenu()
    {
        echo '<br>Menu fechado <br>';
    }

    public function maisVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+1);
        }
    }

    public function menosVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-1);
        }

    }

    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }

    }

    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(0);
        }

    }

    public function play()
    {

        if($this->getLigado() == true && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if($this->getLigado()  && $this->getTocando() == true) {
            $this->setTocando(false);
        }

    }














}

?>