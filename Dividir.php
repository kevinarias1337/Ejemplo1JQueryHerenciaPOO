<?php
require_once "Matematicas.php";
class Dividir extends Matematicas{

    public function dividir(){
        return ($this->getNumero1()/$this->getNumero2());
    }




}


?>