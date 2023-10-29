<?php
# imports:
require_once('Pessoa.php');

//class filha
class Professor extends Pessoa
{
    //atributos
    private $especialidade;
    private $salario;

    //construtor
    public function __construct( $nome, $genero, $especialidade, $salario){
        $this->setNome($nome);
        $this->setGenero($genero);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    //getts and setts
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    //metodos 
    public function receberAum($vaum)
    {
        $this->salario += $vaum;
    }

    //imprimir
    public function info()
    {
        echo "Nome: {$this->getNome()}, Sexo: {$this->getGenero()} especialista em: {$this->getEspecialidade()} e Salario: {$this->getSalario()}. <hr><br>";
    }
}
?>