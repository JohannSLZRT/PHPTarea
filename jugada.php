<?php

class Jugada {
    public $puntajeJugador1;
    public $puntajeJugador2;

    public function __construct() {
        $this->puntajeJugador1 = 0;
        $this->puntajeJugador2 = 0;
    }

    public function iniciarJugada($jugadorLanza, $jugadorEspera, $dado1, $dado2) {
        $puntaje = $jugadorLanza->lanzarDados($dado1, $dado2);

        if ($puntaje % 2 == 0) {
            $jugadorLanza->puntoGanado++;
        } else {
            $jugadorEspera->puntoGanado++;
        }
    }
}

?>
