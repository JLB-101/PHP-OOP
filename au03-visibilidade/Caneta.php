<!-- Mudando a visibilade
(+) public ........publico
(#) protected .....Protegido
(-) private .......Privado
-->
<?php 
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;


    public function rabiscar()
    {
        if ($this->tampada == true){
            echo "Nao posso rabiscar..!";
        }else{
            echo "estou rabiscando..!";
        }
        
    }
    private function tampar()
    {
        $this->tampada = true;
    }
    private function destampar()
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