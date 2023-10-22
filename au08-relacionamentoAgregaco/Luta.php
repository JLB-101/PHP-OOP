<!--// Relacionamento por Agregacao
    /* Nos modelos UML, um relacionamento de agregação mostra um classificador como parte ou como subordinado a outro classificador. Uma agregação é um tipo especial de associação na qual objetos são montados ou configurados para criar um objeto mais complexo.
    /*A agregação não deixa de ser uma associação mas 
    existe uma exclusividade e determinados objetos
     só podem se relacionar a um objeto específico. 
     É uma relação de um para muitos. 
     Um objeto é proprietário de outros mas 
     não há dependência, então ambos podem existir 
     mesmo que a relação não se estabeleça.
-->

<?php 
# imports
require_once('Lutador.php');
class Luta 
{
    private $desafiado;
    private $desafiante;
    private $rouds;
    private $aprovada;

     # metodos 
     public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }

    }

    public function lutar() {
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

            //
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0 : //Ganhou
                    echo '<p>Empatou!!!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1 : //Ganhou desafiado
                     echo ('<br>ganhou: '.$this->desafiado->getNome());
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2 : //Ganhou desafiente
                     echo '<br>Ganhou: '.$this->desafiante->getNome();
                    $this->desafiante->ganharLuta();
                    $this->desafiado->empatarLuta();
                    break;
               
            }

        }else{
            echo'<p> Luta nao pode acontecer </p>';
            // echo'L1: '. $this->desafiado->getNome().'L2: '.
            // $this->desafiante->empatarLuta();
        }
    }

    
    # metodos getts and setts

    public function getDesafiado() {
		return $this->desafiado;
	}
	
	
	public function setDesafiado($desafiado) {
		$this->desafiado = $desafiado;
	}

	public function getDesafiante() {
		return $this->desafiante;
	}
	
	
	public function setDesafiante($desafiante) {
		$this->desafiante = $desafiante;
	}

	
	public function getRouds() {
		return $this->rouds;
	}
	
	
	public function setRouds($rouds) {
		$this->rouds = $rouds;
	}

    public function getAprovada() {
		return $this->aprovada;
	}
	
	public function setAprovada($aprovada) {
		$this->aprovada = $aprovada;
	}

}

?>