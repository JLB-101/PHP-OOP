<?php
# imports:
require_once('Publicacao.php');

class Livro implements Publicacao {
    
    //Atributos
    private $titulo;
    private $autor;
    private $toPaginas;

    private $pagAtual;
    private $aberto;

    private $leitor;

    //Construct
    public function __construct($titulo, $autor, $toPaginas, $pagAtual, $aberto, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->toPaginas = $toPaginas;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }


    // getters & setters
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function getToPaginas() {
        return $this->toPaginas;
    }
    public function setToPaginas($toPaginas) {
        $this->toPaginas = $toPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    // functions
    public function detalhes(){
        # code
    }

    //publicacao function
    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p > $this->toPaginas) {
            $this->pagAtual = 0;
        }else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPage(){
        $this->pagAtual++;
    }
    public function voltarPage(){
        $this->pagAtual--;
    }



}
?>