<?php 
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;


    public function rabiscar()
    {
        if ($this->tampada == true){
            echo "Nao posso rabiscar..!";
        }else{
            echo "estou rabiscando..!";
        }
        
    }
    public function tampar()
    {
        $this->tampada = true;
    }
    public function destampar()
    {
        $this->tampada = false;
    }
    public function escrever()
    {
        if ($this->tampada == true){
            echo "Nao posso Escrever..!";
        }else{
            echo "estou Escrevendo..!";
        }
    }
    public function pintar()
    {
        if ($this->tampada == true){
            echo "Nao posso pintar..!";
        }else{
            echo "estou pintando..!";
        }
    }
}

?>