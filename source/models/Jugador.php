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
    private $valorPleno=10;
    private $maximoDePlenos=3;
    private $ultimaRonda=10;

    public function __construct()
    {
        $rondaInicial = new Ronda();
        array_push($this->rondasGuardadas, $rondaInicial);
    }
    function numerarRonda()
    {
        $this->rondaActual++;
        return "<br>  Ronda numero $this->rondaActual";
    }
    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
    }
    private function guardarPuntos($puntosRonda)
    {
        $this->puntosPartida=$this->puntosPartida+$puntosRonda;
    }
    function sumarPlenos($puntosRonda)
    {
        if ($this->rondasGuardadas[$this->rondaActual-1]->ultimoPleno==TRUE)
        {
            $this->guardarPuntos($puntosRonda);
        }
        if ($this->rondasGuardadas[$this->rondaActual-1]->ultimoSemipleno==TRUE)
        {
            $this->guardarPuntos($puntosRonda);
        }
        if ($this->rondasGuardadas[$this->rondaActual-2]->ultimoPleno==TRUE)
        {
            $this->guardarPuntos($puntosRonda);
        }
    }
    function sumarSPlenos($puntosRonda)
    {
        if ($this->rondasGuardadas[$this->rondaActual-1]->ultimoPleno==TRUE)
        {
            $this->guardarPuntos($puntosRonda);
        }
    }
    function comprobarPlenosSeguidos($ronda)
    {
        if ($this->plenosSeguidos>$this->maximoDePlenos)
        {
            $this->restaurarPlenos();
            $ronda->ultimoPleno=FALSE;
            $ronda->ultimoSemipleno=TRUE;
        }
    }
    function tiradaPleno($ronda)
    {
        if ($ronda->tirada==$this->valorPleno)
        {
            $this->plenosSeguidos++;
            $ronda->ultimoPleno=TRUE;
            $this->guardarPuntos($ronda->puntosRonda);
            $this->comprobarPlenosSeguidos($ronda);
            array_push($this->rondasGuardadas, $ronda);
            return "<br>Ronda $this->rondaActual Esta ronda has conseguido $ronda->puntosRonda 
            <br>Tu TOTAL es $this->puntosPartida <br> <br>";
        }
    }
    function tiradaSemipleno($ronda)
    {
        if ($ronda->puntosRonda==$this->valorPleno)
        {
            $ronda->ultimoSemipleno=TRUE;
        }
    }
    function primerTiro($ronda)
    {
        
        echo $ronda->tiradaUno();
        $this->sumarPlenos($ronda->tirada);
        echo $this->tiradaPleno($ronda);
    }
    function segundoTiro($ronda)
    {
        if ($ronda->tirada<$this->valorPleno)
        {
           echo $ronda->tiradaDos();
           $this->sumarSPlenos($ronda->tirada);
           $this->guardarPuntos($ronda->puntosRonda);
           $this->restaurarPlenos();
           $this->tiradaSemipleno($ronda);
           array_push($this->rondasGuardadas, $ronda);
           return "<br> Esta ronda has conseguido $ronda->puntosRonda 
        <br>Tu TOTAL es $this->puntosPartida <br>";
       }    
    }
    function nuevaRonda($ronda) 
    {
        echo $this->numerarRonda();
        if ($this->rondaActual==$this->ultimaRonda)
        {
            $this->primerTiro($ronda);
                if ($ronda->tirada==$this->valorPleno)
                {
                    $this->primerTiro($ronda);
                    if ($ronda->tirada==$this->valorPleno)
                    {
                        $this->primerTiro($ronda);
                    }
                }
return;
        }
        $this->primerTiro($ronda);
        echo $this->segundoTiro($ronda);   
    }
}


