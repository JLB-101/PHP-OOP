<?php
# imports:
require_once('Pessoa.php');

//classe filha da classe Pessoa
class Aluno extends Pessoa
{
    //Atributs
    private $matricula;
    private $curso;

    //construtor
    public function __construct()
    {
    }

    //getts and setts
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    //
    public function cancelarMatricula()
    {
        $matricula = "Cancelada";
        echo "Matricula esta: {$matricula}";
    }


}

?>