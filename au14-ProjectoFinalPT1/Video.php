<?php
# imports:
require_once('AcoesVideo.php');
class Video implements AcoesVideo
{

    //Atributos
    private $i = 1;
    private $id;
    private $title;
    private $description;
    private $avaliacao;
    private $view;
    private $curtida;
    private $reproduzindo;

    private $deslike;

    //Contruct
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->avaliacao = 1;
        $this->view = 0;
        $this->curtida = 0;
        $this->reproduzindo = false;

    }

    //gets & sets
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao)
    {
        //media
        $media = 0;
        $media = ($this->getAvaliacao() + $avaliacao) /2;
        $this->avaliacao = $media;
    }
    public function getView()
    {
        return $this->view;
    }
    public function setView($view)
    {
        $this->view = $view;
    }
    public function getCurtida()
    {
        return $this->curtida;
    }
    public function setCurtida($curtida)
    {
        $this->curtida = $curtida;
    }
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }
    public function getDeslike(){
        return $this->deslike;
    }
    public function setDeslike($deslike){
        $this->deslike = $deslike;
    }



    //metodos (function)
    public function play()
    {
        $this->reproduzindo = true;
    }
    public function pause()
    {
        $this->reproduzindo = false;
    }
    public function like()
    {
        $this->curtida++;
    }
    public function dislike()
    {
        $this->deslike++;
    }


}
?>