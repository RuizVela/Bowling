<?php
namespace App\models;
use App\models\Ronda;
class Jugador extends Ronda
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;
    private $restaurarPlenos=0;
    public $rondaActual=0;
    public $rondasGuardadas=[];
    public $ultimoPleno=FALSE;
    public $ultimoSemipleno=FALSE;
    private $valorPleno=10;
    private $maximoDePlenos=3;

    public function __construct()
    {
        $rondaInicial = new Ronda();
        array_push($this->rondasGuardadas, $rondaInicial);
    }

    function getArray()
    {
        return $this->rondasGuardadas;
    }
    
    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
        
    }
    private function guardarPuntos($puntosRonda)
    {
        $this->puntosPartida=$this->puntosPartida+$puntosRonda;
    }
    function nuevaRonda($ronda) //TODO: SEPARAR ESPAGUETTI
    {
     echo $ronda->tiradaUno();
        if ($ronda->tirada==$this->valorPleno) {
            $this->guardarPuntos($ronda->puntosRonda);
            $this->rondaActual ++;
            if ($this->rondasGuardadas[$this->rondaActual-1]->ultimoPleno==TRUE){
                $this->guardarPuntos($ronda->puntosRonda);
                if ($this->plenosSeguidos==$this->maximoDePlenos){
                    $this->restaurarPlenos();
                    $ronda->ultimoPleno=FALSE;
                    $ronda->ultimoSemipleno=TRUE;
                    array_push($this->rondasGuardadas, $ronda);
                    $this->getArray()[0];
                    return "<br>Ronda $this->rondaActual Esta ronda has conseguido $ronda->puntosRonda 
                    <br>Tu TOTAL es $this->puntosPartida <br> <br>";
                }
            }
            $this->plenosSeguidos++;
            $ronda->ultimoPleno=TRUE;
            $ronda->ultimoSemipleno=FALSE;
            array_push($this->rondasGuardadas, $ronda);
            return "<br>Ronda $this->rondaActual Esta ronda has conseguido $ronda->puntosRonda 
            <br>Tu TOTAL es $this->puntosPartida <br> <br>";
           }
       echo $ronda->tiradaDos();
        $this->guardarPuntos($ronda->puntosRonda);
        if ($ronda->ultimoPleno==TRUE){
            $this->guardarPuntos($ronda->puntosRonda);
        }
        $this->restaurarPlenos();
        $ronda->ultimoPleno=FALSE;
        $ronda->ultimoSemipleno=FALSE;
        array_push($this->rondasGuardadas, $ronda);
        $this->rondaActual ++;
        return "<br> Ronda $this->rondaActual Esta ronda has conseguido $ronda->puntosRonda 
        <br>Tu TOTAL es $this->puntosPartida <br>";
        
    }
}


