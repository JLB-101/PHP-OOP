<?php 
//Interface
interface Publicacao {

    //abstract function
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarPage();
    public function voltarPage();

}
?>