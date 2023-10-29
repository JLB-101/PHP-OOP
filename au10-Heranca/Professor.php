<?php 
# imports:
require_once('Pessoa.php');

//
class Professor extends Pessoa
{
    //
    private $especialidade;
    private $salario;


    //getts and setts
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }

    //metodos 
    public function receberAum(){
        $this->salario += ($this->getSalario()*0.2);
    }

    //imprimir
    public function info (){
        echo"Nome: {$this->getNome()}, Sexo: {$this->getGenero()} especialista em: {$this->getEspecialidade()} e Salario: {$this->getSalario()}. <hr><br>";
    }
}
?>