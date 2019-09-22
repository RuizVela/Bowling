<?php
namespace App\models;
use App\models\Ronda;
use App\models\Partida;
class Jugador extends Partida
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;

    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
    }

    function crearRonda()
    {
        $ronda = new Ronda;
        $ronda->tiradaUno();
        $ronda->tiradaDos();
        $this->puntosPartida=$this->puntosPartida+$ronda->puntosRonda;
        echo "<br>Esta ronda has conseguido $ronda->puntosRonda";
        echo "<br>Tu TOTAL es $this->puntosPartida";
        
    }
}
