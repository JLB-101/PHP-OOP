<?php
#imports:
require_once('Animal.php');

//class filha 
class Cao extends Animal
{
    //Atributos
   
    private $corOlhos;

    //gett and setts
    public function getCorOlhos(){
        return $this->corOlhos;
    }
    public function setCorOlhos($corOlhos){
        $this->corOlhos = $corOlhos;
    }

    //metodo construtor
    public function __construct($nome, $idade, $cor, $peso, $especie, $raca ,$corOlhos){
        $this->id = $this->nextId;
        $this->nextId++;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->corOlhos = $corOlhos;
        $this->peso = $peso;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->corOlhos = $corOlhos;
    }

    //metodos especias -- Sobrescrita do comportamento do Animal
    
    public function andar()
    {
        echo'andando';
    }

    public function dormir(){
        echo 'zzzzz';
    }

    public function comer(){
        echo 'comendo';
    }
    public function emitirSom(){
        echo 'au au au auuu!!!';
    }

  
    //metodos de inpressao


}
?>