<?php 
class Livro {
    private $titulo;
    private $autor;
    private $toPaginas;

    private $pagAtual;
    private $aberto;

    private $leitor;


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


}
?>