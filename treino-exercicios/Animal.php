<?php
//Heranca
//Class Mae
class Animal
{
    protected $nextId = 0;
    protected  $id;
    //Atributos
    protected $nome;
    protected $idade;
    protected $cor;
    protected $peso;
    protected $especie;
    protected $raca;

    //getts and setts
    public function getId() { 
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getespecie()
    {
        return $this->especie;
    }
    public function setespecie($especie)
    {
        $this->especie = $especie;
    }
    public function getraca()
    {
        return $this->raca;
    }
    public function setraca($raca)
    {
        $this->raca = $raca;
    }


    //metodos - Polimorfismo
    public function andar()
    {
        #andar
    }
    public function dormir()
    {
         #code
    }
    public function comer()
    {
         #code
    }

    public function emitirSom()
    {
        #code
    }

    //metodo contrutor

    // metodo para ipressao da informacao do Animal
    public function info()
    {
        #code
    }

}



?>