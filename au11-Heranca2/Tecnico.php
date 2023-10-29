<?php
# imports:
require_once('Aluno.php');

//classe filha de Aluno <-Pessoa(classe Raiz)
final class Tecnico extends Aluno
{
    //Atributos
    private $registroProfissional;

    //gets and sets
    public function getRegistroProfissional(){
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }

    //metodos
    public function praticar(){
        echo "{$this->getNome()} esta na Aula Pratica";
    }
}

?>