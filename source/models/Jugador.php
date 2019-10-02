<?php
namespace App\models;
use App\models\Ronda;
use App\models\Partida;
class Jugador extends Partida
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;
    public $rondas=0;
    public $ultimoPleno=FALSE;

    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
    }
    function crearRonda($ronda)
    {
     echo $ronda->tiradaUno();
        if ($ronda->tirada==$ronda->valorPleno) {
            echo "<br>/";
            $this->puntosPartida=$this->puntosPartida+$ronda->puntosRonda;

            if ($this->ultimoPleno==TRUE){
                $this->puntosPartida=$this->puntosPartida+$ronda->puntosRonda;
            }
            echo "<br>Esta ronda has conseguido $ronda->puntosRonda";
            echo "<br>Tu TOTAL es $this->puntosPartida <br>";
            $this->ultimoPleno=TRUE;
            return;
           }
       echo $ronda->tiradaDos();
        $this->puntosPartida=$this->puntosPartida+$ronda->puntosRonda;
        if ($this->ultimoPleno==TRUE){
            $this->puntosPartida=$this->puntosPartida+$ronda->puntosRonda;
        }
        echo "<br>Esta ronda has conseguido $ronda->puntosRonda";
        echo "<br>Tu TOTAL es $this->puntosPartida <br>";
        $this->ultimoPleno=FALSE;
    }
}


