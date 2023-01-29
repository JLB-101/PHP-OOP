<?php
class Caneta
{

    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;
    /**
     * contrutor Ca
     */
    public function Caneta(){

    }
    /*
    *contrutor com parametro
    *
    public function Caneta($m, $c, $p)
    {
        $this->cor = "Azul";
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }*/

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($c)
    {
        $this->cor = $c;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }

    public function getCarga()
    {
        return $this->carga;
    }
    public function setCarga($cg)
    {
        $this->carga = $cg;
    }

    public function getTampada()
    {
        return $this->tampada;
    }
    public function setTampada($t)
    {
        $this->tampada = $t;
    }

    /* outros metodos */

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Nao posso rabiscar..!";
        } else {
            echo "estou rabiscando..!";
        }
    }
    private function tampar()
    {
        $this->tampada = true;
    }
    private function destampar()
    {
        return false;
    }
    public function escrever()
    {
        $this->tampada = $this->destampar();

        if ($this->tampada == true) {
            echo "Nao posso Escrever..!";
        } else {
            echo "estou Escrevendo..!";
        }
    }
    public function pintar()
    {
        if ($this->tampada == true) {
            echo "Nao posso pintar..!";
        } else {
            echo "estou pintando..!";
        }
    }
}
