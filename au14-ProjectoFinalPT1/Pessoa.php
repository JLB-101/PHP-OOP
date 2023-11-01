<?php

abstract class Pessoa{

    //Atributs
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;


    //gets & sets
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }

    public function ganhaExperiencia (){

    }
}

?>