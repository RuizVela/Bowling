<?php
namespace App\models;
class Jugador
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;
    private $restaurarPlenos=0;
    public $rondas=0;
    public $ultimoPleno=FALSE;
    private $valorPleno=10;
    
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
        if ($ronda->tirada==$this->valorPleno) {
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


