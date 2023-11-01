<?php 

class Gafanhoto extends Pessoa {
    //Atributs
    private $login;
    private $totAsistido;
   
    //gets & sets
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getTotAsistido(){
        return $this->totAsistido;
    }
    public function setTotAsistido($totAsistido){
        $this->totAsistido = (int)$totAsistido;
    }

    //
    public function viuMaisUm(){

    }



}
?>