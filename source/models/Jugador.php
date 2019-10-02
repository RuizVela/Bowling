<?php
namespace App\models;
class Jugador
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;
    private $restaurarPlenos=0;
    public $rondas=0;
    public $ultimoPleno=FALSE;
    public $ultimoSemipleno=FALSE;
    private $valorPleno=10;
    private $maximoDePlenos=3;
    
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
                if ($this->plenosSeguidos==$this->maximoDePlenos){
                    $this->restaurarPlenos();
                    $this->ultimoPleno=FALSE;
                    $this->ultimoSemipleno=TRUE;
                    return "<br>Esta ronda has conseguido $ronda->puntosRonda 
                    <br>Tu TOTAL es $this->puntosPartida <br> <br>";
                }
            }
            $this->plenosSeguidos++;
            $this->ultimoPleno=TRUE;
            $this->ultimoSemipleno=FALSE;
            
            return "<br>Esta ronda has conseguido $ronda->puntosRonda 
            <br>Tu TOTAL es $this->puntosPartida <br> <br>";
           }
       echo $ronda->tiradaDos();
        $this->guardarPuntos($ronda->puntosRonda);
        if ($this->ultimoPleno==TRUE){
            $this->guardarPuntos($ronda->puntosRonda);
        }
        $this->restaurarPlenos();
        $this->ultimoPleno=FALSE;
        return "<br>Esta ronda has conseguido $ronda->puntosRonda 
        <br>Tu TOTAL es $this->puntosPartida <br>";
        
    }
}


