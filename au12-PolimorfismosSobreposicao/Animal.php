<?php
# imports:


//class(root) mae:
abstract class Animal
{
    //atributs -- caracteristicas
    private $peso;
    private $idade;

    //gets & sets
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    //metodos (function) -- comportamento
    public function locomover()
    {
        # code
    }

    public function alimentar()
    { # code
    }

    public function emitirSom()
    { # code
    }
    public function info()
    {
        # code
    }

}

?>