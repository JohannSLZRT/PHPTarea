<?php

class Jugador {
    public $nombre;
    public $puntoGanado;

    public function __construct() {
        $this->puntoGanado = 0;
    }

    public function lanzarDados($dado1, $dado2) {
        $dado1->lanzar();
        $dado2->lanzar();

        return $dado1->valor + $dado2->valor;
    }
}

?>
