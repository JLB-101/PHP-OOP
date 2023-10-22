<?php

class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;

    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

    }

    # metodos getts and setts
    public function getNome()
    {
        return $this->nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getPeso()
    {
        return $this->peso;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function setPeso($peso)
    {

        $this->peso = $peso;
        // atribuir categoria por peso
        $this->setCategoria();
    }

    public function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = 'Invalido';
        } else if ($this->getPeso() <= 70.3) {
            $this->categoria = 'Leve';
        } else if ($this->getPeso() <= 83.9) {
            $this->categoria = 'Medio';
        }else if($this->getPeso() <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Invalido';
        }

    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    # metodos
    public function apresentar()
    {
        echo '<p>---------------------------------</p>';
        echo 'Chegou a horaaa!!! Ooo lutador:';
        echo '<br>Lutador: '.$this->getNome();
        echo '<br>Nacionalidade: '.$this->getNacionalidade();
        echo '<br>Idade: '.$this->getIdade();
        echo '<br>Altura: '.$this->getAltura();
        echo '<br>Peso: '.$this->getPeso();
        echo '<br>Categoria: '.$this->getCategoria();
        echo '<br>Vitorias: '.$this->getVitorias();
        echo '<br>Derrotas: '.$this->getDerrotas();
        echo '<br>Empates: '.$this->getEmpates();
    }
    public function Status()
    {
        echo ('<br>'.$this->getNome());
        echo '<br>e um peso'.$this->getCategoria();
        echo '<br>com vitorias: '.$this->getVitorias();
        echo '<br>derrotas: '.$this->getDerrotas();
        echo '<br>Empates: '.$this->getEmpates();
    }

    public function ganharLuta()
    {
        //add win
        $this->setVitorias($this->getVitorias()+1);
    }

    public function perderLuta()
    {
        //add loses
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function empatarLuta()
    {
        //add draw
        $this->setEmpates($this->getEmpates()+1);
    }

}

?>