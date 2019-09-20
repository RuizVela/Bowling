<?php
namespace App\models;
use App\models\Jugador;

class Ronda extends Jugador
{
    public $tirada;
    public $puntosRonda=0;
    public $valorPleno=10;

 
    function tirada()
    {
              $this->puntosRonda=$this->puntosRonda+$this->tirada;
        echo "<br>Has Tirado $this->tirada Bolos.";
        echo "<br>Tienes $this->puntosRonda Puntos";

    }

}