<?php 

class Funcionario extends Pessoa
{
    //Atributos
    private $setor;
    private $trabalhando;

    //


    //getts and setts
    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($setor) {
        $this->setor = $setor;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
    
    //metodo
    public function mudarTrab($trabalho) {
        $this->setSetor($trabalho);
    }

}


?>