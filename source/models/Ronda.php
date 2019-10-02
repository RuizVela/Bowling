<?php
namespace App\models;

class Ronda
{
    public $tirada;
    public $puntosRonda=0;
    private $bolosRestantes=10;
 
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