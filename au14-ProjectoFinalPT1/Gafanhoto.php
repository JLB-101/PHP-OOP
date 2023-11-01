<?php
# imports:
require_once('Pessoa.php');

class Gafanhoto extends Pessoa
{
    //Atributs
    private $login;
    private $totAsistido;

    //Contructor -- getting from Pessoa || herdando da Pessoa
    public function __construct($nome, $idade, $sexo, $login, )
    {
        //super($nome, $idade, $sexo);
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAsistido = 0;
    }

    //gets & sets
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getTotAsistido()
    {
        return $this->totAsistido;
    }
    public function setTotAsistido($totAsistido)
    {
        $this->totAsistido = (int) $totAsistido;
    }

    //
    public function assistirMaisUm()
    {
        $this->totAsistido++;
    }



}
?>