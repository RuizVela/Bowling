<?php
namespace App\models;
use App\models\Jugador;

class Ronda extends Jugador
{
    public $tirada;
    public $puntosRonda=0;
    public $valorPleno=10;
    public $bolosRestantes;


 

    function tiradaUno()
    {
        $this->tirada=rand(0, 10);
        $this->puntosRonda=$this->tirada;
        echo "<br>Has Tirado $this->tirada Bolos.";
        $this->bolosRestantes=$this->valorPleno-$this->tirada;
    }
    function tiradaDos()
    {
        if ($this->tirada<$this->valorPleno) {
            $this->tirada=rand(0, $this->bolosRestantes);
            $this->puntosRonda=$this->puntosRonda+$this->tirada;
            echo "<br>Has Tirado $this->tirada Bolos.";
            return;
        }
        echo "<br>Ya has tirado todos los bolos.";
    }

}