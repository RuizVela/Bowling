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
    private function guardarPuntos($puntosRonda)
    {
        $this->puntosPartida=$this->puntosPartida+$puntosRonda;
    }
    function crearRonda($ronda)
    {
     echo $ronda->tiradaUno();
        if ($ronda->tirada==$ronda->valorPleno) {
            $this->guardarPuntos($ronda->puntosRonda);
            if ($this->ultimoPleno==TRUE){
                $this->guardarPuntos($ronda->puntosRonda);
            }
            $this->ultimoPleno=TRUE;
            echo "<br>Esta ronda has conseguido $ronda->puntosRonda";
            echo "<br>Tu TOTAL es $this->puntosPartida <br>";
            return;
           }
       echo $ronda->tiradaDos();
        $this->guardarPuntos($ronda->puntosRonda);
        if ($this->ultimoPleno==TRUE){
            $this->guardarPuntos($ronda->puntosRonda);
        }
        echo "<br>Esta ronda has conseguido $ronda->puntosRonda";
        echo "<br>Tu TOTAL es $this->puntosPartida <br>";
        $this->ultimoPleno=FALSE;
    }
}


