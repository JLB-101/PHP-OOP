<?php 
class Aluno
{   
    //Atributs
    private $matricula;
    private $curso;


    //_construct

    //getts and setts
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }

    //
    public function cancelarMatricula(){
        $this->matricula = false;
    }
    

}

?>