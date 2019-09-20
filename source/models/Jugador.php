<?php
namespace App\models;
use App\models\Ronda;
use App\models\Partida;
class Jugador extends Partida
{
    public $puntosPartida=0;
    public $plenosSeguidos=0;

    function restaurarPlenos()
    {
        $this->plenosSeguidos=$this->restaurarPlenos;
    }

    function crearRonda()
    {
        $Ronda = new Ronda();
        $Ronda->tirada=rand(0, 10);
        $Ronda->tirada();
        $guardado=$Ronda->valorPleno-$Ronda->tirada;
        if ($Ronda->tirada<$Ronda->valorPleno) {
            $Ronda->tirada=rand(0, $guardado);
            echo "<br>";
            $Ronda->tirada();
        }
        $this->puntosPartida=$this->puntosPartida+$Ronda->puntosRonda;
        echo "<br>tu TOTAL es $this->puntosPartida";
    }
}