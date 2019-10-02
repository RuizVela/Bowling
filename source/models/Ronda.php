<?php
namespace App\models;
use App\models\Jugador;

class Ronda extends Jugador
{
    public $tirada;
    public $puntosRonda=0;
    public $valorPleno=10;
    public $bolosRestantes=10;
    private $restablecerTirada=0;

 
    function guardarPuntos($numero){
        $this->puntosRonda=$this->puntosRonda+$numero;
    }
    function tiradaUno()
    {
        $this->tirada=$this->restablecerTirada;
        $this->tirada=rand(0, 10);
        $this->guardarPuntos($this->tirada);
        echo "<br>Has Tirado $this->tirada Bolos.";
        $this->bolosRestantes=$this->bolosRestantes-$this->tirada;
        
    }
    function tiradaDos()
    {
            $this->tirada=rand(0, $this->bolosRestantes);
            $this->guardarPuntos($this->tirada);
            echo "<br>Has Tirado $this->tirada Bolos.";
    }

}