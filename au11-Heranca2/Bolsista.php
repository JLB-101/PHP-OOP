<?php

//classe filha da classe Aluno<-Pessoa
class Bolsista extends Aluno
{
    //Atributos
    private $bolsa;

    //gets and sets
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }

    //metodo
    public function renovarBolsa()
    {
        echo "<p> Bolsa do {$this->getNome()} esta Renovada <p>";
    }

    public function pagarMensalidade()
    {
        echo "<p>  {$this->getNome()} e Bolsista!, Paga com Desconto <p>";
    }

}
?>