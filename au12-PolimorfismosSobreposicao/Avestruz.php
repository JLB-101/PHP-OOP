<?php
# imports:
require_once('Animal.php');
require_once('Ave.php');

// class filha de Ave-->Animal

class Avestruz extends Ave
{
    //Atributo
    private $id = 1;
    private $codeNome = 'Avestruz';
    private $corPenas;
    private $altura;

    //metodo (function) contruct 
    public function __construct($peso, $idade, $corPenas, $altura)
    {
        $i = $this->id;
        $this->id++;

        $this->setCodeNome($this->codeNome . "[{$i}]");
        $this->setPeso($peso);
        $this->setidade($idade);
        $this->setCorPenas($corPenas);
        $this->setAltura($altura);
    }

    //gets and sets
    public function getCodeNome()
    {
        return $this->codeNome;
    }
    public function setCodeNome($codeNome)
    {
        $this->codeNome = $codeNome;
    }
    public function getCorPenas()
    {
        return $this->corPenas;
    }
    public function setCorPenas($corPenas)
    {
        $this->corPenas = $corPenas;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }



    // metodos -- comportamento unico
    public function abrirPelansTrazeira(){
        echo"Avestrus: Abriu as pelas Trazeiras";
    }
    # Metedos: SobrePosicao
    public function locomover()
    {
        echo 'Avestrus: Andar, Correr';
    }

    public function alimentar()
    {
        echo 'Avestruz: Comer Gramas, Sementes. Insects.';
    }

    public function emitirSom()
    {
        echo 'Avestruz: Au Aah ah ah ah';
    }

}
?>