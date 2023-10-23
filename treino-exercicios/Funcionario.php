<?php 

//class Funcionario
class Funcionario
{

    //Atributos
    private $nextId = 1;
    private  $id;
    private  $nome;

    private $genero;

    private $morada;

    private $telefone;

    private $departamento;

    private $cargo;

    //metodo contructor

    public function __construct($nome, $genero, $morada, $telefone, $departamento, $cargo){
        $this->id = $this->nextId;
        $this->nextId++;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->morada = $morada;
        $this->telefone = $telefone;
        $this->departamento = $departamento;
        $this->cargo = $cargo;

    }

    //metodos getters e setters
    public function getId() { 
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function getMorada(){
        return $this->morada;
    }
    public function setMorada($Morada){
        $this->morada = $Morada;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){ 
        $this->telefone = $telefone;
    }  
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo($Cargo){
        $this->cargo = $Cargo;
    }
    public function getDepartamento(){
        return $this->departamento;
    }

    //metodo de informacao
    public function __toString() {
        return '<br> Nome:'.$this->getNome().' <br>
        <br>Genero: '.$this->getMorada().'<br> 
        <br>Morada '.$this->getMorada().' <br>
        <br>Telefone'.$this->getTelefone().' <br>
        <br>Departamento'.$this->getDepartamento().' <br>
        <br>Cargo '.$this->getDepartamento().' <br>
        <br> ------------------------------------------- <br>
        
        ';
    }





}


?>