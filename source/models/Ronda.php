<?php
namespace App\models;

class Ronda
{
    public $tirada;
    public $puntosRonda=0;
    private $bolosRestantes=10;
    public $ultimoPleno=FALSE;
    public $ultimoSemipleno=FALSE;
 
    private function guardarPuntos($tirada){
        $this->puntosRonda=$this->puntosRonda+$tirada;
    }
    function tirarBolos()
    {
        $this->tirada=10;
    }
    function tiradaUno()
    {
        $this->tirarBolos();
        $this->guardarPuntos($this->tirada);
        $this->bolosRestantes=$this->bolosRestantes-$this->tirada;
        return "<br>Has Tirado $this->tirada Bolos.";
        
    }
    function tiradaDos()
    {
            $this->tirarBolos();
            $this->guardarPuntos($this->tirada);
            return "<br>Has Tirado $this->tirada Bolos.";
    }

}