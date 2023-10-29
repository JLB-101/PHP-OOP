<?php 
class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    //Construtor

    // getters & setters
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    // metodos especias
    public function fazerAniversario(){
        //$this->idade = $this->getIdade() + 1;
        $this->idade++;
    }

}
?>