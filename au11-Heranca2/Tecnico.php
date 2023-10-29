<?php
# imports:
require_once('Aluno.php');

//classe filha de Aluno <-Pessoa(classe Raiz)
final class Tecnico extends Aluno
{
    //Atributos
    private $registroProfissional;

    //construtor
    public function __construct($nome, $genero, $curso, $registroProfissional)
    {
        $this->setNome($nome);
        $this->setGenero($genero);
        $this->setCurso($curso);
        $this->setregistroProfissional($registroProfissional);
    }

    //gets and sets
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;
    }

    //metodos
    public function praticar()
    {
        echo "{$this->getNome()} esta na Aula Pratica";
    }

    //
    public function info()
    {
        echo "N<p> ome: {$this->getNome()} estudante do Curso {$this->getCurso()} com numero de Registro {$this->getRegistroProfissional()} </p>";
    }
}

?>