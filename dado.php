<?php

class Dado {
    public $valor;

    public function __construct() {
        $this->valor = 1;
    }

    public function lanzar() {
        $this->valor = rand(1, 6);
    }
}

?>
