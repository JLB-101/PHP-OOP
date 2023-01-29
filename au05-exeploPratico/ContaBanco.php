<?php
class ContaBanco
{
    private $numConta;
    protected $tipoConta;
    private $proprietario;
    private $saldo;
    private $estado;

    public function ContaBanco($nr, $tp, $p)
    {
        $this->numConta = $nr;
        $this->tipoConta = $tp;
        $this->proprietario = $p;
        $this->saldo = 0.0;
        $this->estado = false;
        $this->abrirConta($tp);
    }

    public function abrirConta($t)
    {
        $this->setTipoConta($t);
        $this->setEstado(true);
        if ($t == "CC") {
            $this->setSaldo(50.00);
            print "<p>{$this->proprietario}, sua Conta({$t}) esta aberta !!!</p>";
        } elseif ($t == "CP") {
            $this->setSaldo(150.00);
            print "<p>{$this->proprietario}, sua Conta({$t}) esta aberta !!!</p>";
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            print "<p> Conta ainda tem valor, nao possos fecha-la</p>";
        } elseif ($this->getSaldo() < 0) {
            print "<p> Conta esta em debito(saldo negativo), nao possos fecha-la</p>";
        } else {
            $this->setEstado(false);
            print "<p> Conta esta fechada</p>";
        }
    }
    public function depositar($v)
    {
        if ($this->getEstado() == true) {
            $this->setSaldo(($v) + ($this->getSaldo()));
            print "<p>depositaste {$v} MT na sua Conta !!!</p>";
        } else {
            print "<p>Imposivel depositar, Conta esta fechada</p>";
        }
    }
    public function sacar($v)
    {
        if ($this->getEstado() == true) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo(($this->getSaldo())-($v));
                print "<p>levantou {$v} MT na sua Conta !!!</p>";
            }else{
                print "<p>Imposivel levantar/sacar, SALDO INSUFICIENTE</p>";
            }
        } else {
            print "<p>Imposivel levantar/sacar, Conta esta fechada</p>";
        }
    }
    public function pagarMensal()
    {
       
        if($this->getTipoConta() == "CC"){
            $v = 12;
        }elseif($this->getTipoConta() =="CP"){
            $v = 20;
        }

        if($this->getEstado() == true){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                print "<p>Saldo Insuficiente</p>"; 
            }
        }else{
            print "<p>Imposivel pagar conta  fechada</p>";
        }
    }

    /**
     * @return mixed
     */
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * @param mixed $numConta 
     * @return self
     */
    public function setNumConta($numConta): self
    {
        $this->numConta = $numConta;
        return $this;
    }

    public function  getTipoConta()
    {
        return $this->tipoConta;
    }
    public function  setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;
    }

    public function getProprietario()
    {
        return $this->proprietario;
    }
    public function setProprietario($proprietario)
    {
        $this->proprietario = $proprietario;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo 
     * @return self
     */
    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado 
     * @return self
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;
        return $this;
    }
}
