<?php
namespace App\models;
use App\models\Jugador;

class Ronda extends Jugador
{
    public $tirada;
    public $puntosRonda=0;
    public $valorPleno=10;
    public $bolosRestantes=10;
 
    private function guardarPuntos($tirada){
        $this->puntosRonda=$this->puntosRonda+$tirada;
    }
    function tiradaUno()
    {
        $this->tirada=rand(0, 10);
        $this->guardarPuntos($this->tirada);
        $this->bolosRestantes=$this->bolosRestantes-$this->tirada;
        return "<br>Has Tirado $this->tirada Bolos.";
        
    }
    function tiradaDos()
    {
            $this->tirada=rand(0, $this->bolosRestantes);
            $this->guardarPuntos($this->tirada);
            return "<br>Has Tirado $this->tirada Bolos.";
    }

}